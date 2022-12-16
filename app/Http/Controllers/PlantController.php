<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
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
        return view('', [
            'title' => "Factories",
            'factory' => Plant::all()
        ]);
    }

    public function indexAdmin()
    {
        return view('admin.adminfactories', [
            'title' => "Factories",
            'factory' => Plant::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createplant',
        [
            'title' => "Create Factory"
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
            "description" => "required"
        ]);
        Plant::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        return view('', [
            'title' => "Show Factory",
            'factory' => $plant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        return view('admin.updateplant', [
            'title' => "Update Factory",
            'plant' => $plant
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $plant->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect('/adminf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
        return redirect('/adminf');
    }
}
