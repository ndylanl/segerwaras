<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.adminreviews' ,[
            'title' => "Admin Review",
            'reviews' => Review::where('content', 'like', '%'.$request->search.'%')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'content' => "required",
            'score' => "required"
        ]);
        Review::create([
            'content' => $request->content,
            'score' => $request->score,
            'user_id' => Auth::id(),
            'product_id' => $request->product_id
        ]);
        return redirect('/products/'.$request->product_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, Review $review)
    {
        $review->delete();
        return redirect('/products/'.$request->product_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->update([
            'content' => $request->content,
            'score' => $request->score,
        ]);
        return redirect('/products/'.$request->product_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request, Review $review)
    {
        $review->delete();
        
        if (Auth::user()->role == "admin") {
            return redirect('/adminr');
        }

        return redirect('/products/'.$request->product_id);
    }
}
