<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Apply the middleware to all methods except the specified ones.
     *
     * @return void
     */
    public function except()
    {
        $this->middleware('admin')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.product', [
            'title' => "Products",
            'products' => Product::all(),
            'tags' =>Tag::all()
        ]);
    }

    public function indexAdmin()
    {
        return view('admin.adminproduct', [
            'title' => "Admin Product",
            'products' => Product::all(),
            'tags' =>Tag::all()
        ]);
    }

    public function indexIndex()
    {

        $products = DB::table('products')
                    ->select('products.id', 'products.name', 'products.description', DB::raw("SUM(`cart_items`.`quantity`) as buy"))
                    ->join('cart_items','cart_items.product_id','=','products.id')
                    ->join('carts','cart_items.cart_id','=','carts.id')
                    ->whereExists(function ($query) {
                        $query->from('transactions')
                            ->select('*')
                            ->where('transactions.cart_id','=',DB::raw('carts.id'));
                    })
                    ->groupBy('cart_items.product_id')
                    ->orderBy('buy','desc')
                    ->limit(4)
                    ->get();

        return view('visitor.index', [
            'title' => "Seger Waras",
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproduct', 
        [
            'title' => "Create Product",
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|string|max:255",
            "description" => "required",
            "price" => "required|integer",
            "unitstock" => "required|integer",
            "cover" => "required|image",
        ]);
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'unitStock' => $request->unitstock,
            'cover' => $request->file('cover')->store('productcover', 'public'),
            'isVisible' => $request->boolean('isvisible'),
        ]);

        $tag = Tag::find($request->tags);
        $product->tags()->attach($tag);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('visitor.showproduct', [
            'title' => "Show Product",
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.updateproduct', [
            'title' => "Update Prodcuts",
            'product' => $product,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request->file('cover')){
            unlink('storage/'.$product->cover);
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'unitStock' => $request->unitstock,
                'cover' => $request->file('cover')->store('productcover', 'public'),
                'isVisible' => $request->boolean('isvisible')
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'unitStock' => $request->unitstock,
                'isVisible' => $request->boolean('isvisible')
            ]);
        }

        $tag = Tag::find($request->tags);
        $product->tags()->sync($tag);

        return redirect("/adminp");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        unlink('storage/'.$product->cover);
        $product->delete();
        return redirect('/');
    }
}
