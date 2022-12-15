<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
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
        return view('berita',[
            'title' => "Blogs",
            'berita' => Blog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createblog',
        [
            'title' => "Create Blog",
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
            "title" => "required|string|max:255",
            "content" => "required",
            "cover" => "required|image"
        ]);
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'cover' => $request->file('cover')->store('blogcover', 'public'),
            'user_id' => Auth::id()
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('showberita', [
            'title' => "Show Blog",
            'berita' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view("updateblog", [
            "title" => "Update Blog",
            "blog" => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if($request->file('cover')){
            unlink('storage/'.$blog->cover);
            $blog->update([
                "title"=>$request->title,
                "content"=>$request->content,
                "cover"=>$request->file('cover')->store('blogcover', 'public')
            ]);
        } else {
            $blog->update([
                "title"=>$request->title,
                "content"=>$request->content,
            ]);
        }
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        unlink('storage/'.$blog->cover);
        $blog->delete();
        return redirect('/');
    }
}
