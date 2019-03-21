<?php

namespace App\Http\Controllers;

use App\Spectacle;
use Illuminate\Http\Request;

class SpectacleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param   string  $category
     * @return  \Illuminate\Http\Response
     */
    public function index($category)
    {
        $spectacles = Spectacle::where('category', $category)->get();
        return view('spectacles.index', ['spectacles' => $spectacles]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(String $slug)
    {
        $spectacle = Spectacle::where('slug', $slug)->first();
        return view('spectacles.show', ['spectacle' => $spectacle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spectacle  $spectacle
     * @return \Illuminate\Http\Response
     */
    public function edit(Spectacle $spectacle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spectacle  $spectacle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spectacle $spectacle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spectacle  $spectacle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spectacle $spectacle)
    {
        //
    }
}
