<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReziserResource;
use App\Models\Reziser;
use Illuminate\Http\Request;

class ReziserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sviReziseri = Reziser::all();
        return ReziserResource::collection($sviReziseri);
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
     * @param  \App\Models\Reziser  $reziser
     * @return \Illuminate\Http\Response
     */
    public function show(Reziser $reziser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reziser  $reziser
     * @return \Illuminate\Http\Response
     */
    public function edit(Reziser $reziser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reziser  $reziser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reziser $reziser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reziser  $reziser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reziser $reziser)
    {
        $reziser->delete();
        return response()->json('Obrisan je željeni reziser!');
    }
}
