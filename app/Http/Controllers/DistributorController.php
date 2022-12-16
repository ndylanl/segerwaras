<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistributorController extends Controller
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
        return view('visitor.aboutus', [
            'title' => 'About Us',
            'plant' => Plant::all(),
            'distributor' => Distributor::all()
        ]);
    }

    public function indexAdmin()
    {
        return view('admin.admindistributor', [
            'title' => "Distributors",
            'distributor' => Distributor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createdistributor',
        [
            'title' => "Create Distributor",
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
        Distributor::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function show(Distributor $distributor)
    {
        return view('', [
            'title' => "Show Distributor",
            'distributor' => $distributor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit(Distributor $distributor)
    {
        return view('admin.updatedistributor', [
            'title' => "Update Distributor",
            'distributor' => $distributor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distributor $distributor)
    {
        $distributor->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect('/admind');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distributor $distributor)
    {
        $distributor->delete();
        return redirect('/admind');
    }
}
