<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  string  $aspect
     * @return \Illuminate\Http\Response
     */
    public function theater($aspect)
    {
        switch ($aspect) {
            case 'history': return view('theater.theater', ['aspect' => Post::find(1)]); break;
            case 'photo': return view('theater.theater', ['aspect' => Post::find(2)]); break;
            case 'scenes': return view('theater.theater', ['aspect' => Post::find(3)]); break;
            case 'hallplan': return view('theater.theater', ['aspect' => Post::find(4)]); break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function festival()
    {
        return view('theater.aspect', ['aspect' => Post::find(5)]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studio()
    {
        return view('theater.aspect', ['aspect' => Post::find(6)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
