<?php

namespace App\Http\Controllers;

use App\Affiche;
use Illuminate\Http\Request;

class AfficheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param   string  $month
     * @return \Illuminate\Http\Response
     */
    public function index(string $month)
    {
        switch ($month) {
            case 'january': $month = 1; break;
            case 'february': $month = 2; break;
            case 'march': $month = 3; break;
            case 'april': $month = 4; break;
        }
        $current_month = date('m');
        $next_month = date('m', strtotime('+1 month'));
        $affiches = Affiche::where('starts_at', '>', date("Y-m-d H:i:s"))
            ->whereMonth('starts_at', $month)
            ->orderBy('starts_at', 'asc')
            ->get();

        return view('affiches.index', [
            'current_month' => strtolower(date("F", mktime(0, 0, 0, $current_month, 1))),
            'next_month' => strtolower(date("F", mktime(0, 0, 0, $next_month, 1))),
            'affiches' => $affiches
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Affiche  $affiche
     * @return \Illuminate\Http\Response
     */
    public function show(Affiche $affiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Affiche  $affiche
     * @return \Illuminate\Http\Response
     */
    public function edit(Affiche $affiche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Affiche  $affiche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affiche $affiche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Affiche  $affiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affiche $affiche)
    {
        //
    }
}
