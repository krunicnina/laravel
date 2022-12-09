<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReziserResource;
use App\Models\Reziser;
use App\Models\Serija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:100',
            'jmbg' => 'required',
            'drzava' => 'required',
           
            
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $reziser = Reziser::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'jmbg' => $request->jmbg,
            'drzava' => $request->drzava,
            
           
        ]);

        return response()->json(['Reziser is created successfully.', new ReziserResource($reziser)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reziser  $reziser
     * @return \Illuminate\Http\Response
     */
    public function show(Reziser $reziser)
    {
        return new ReziserResource($reziser);
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
        $validator = Validator::make($request->all(), [
             'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:100',
            'jmbg' => 'required',
            'drzava' => 'required',
        
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $reziser->ime = $request->ime;
        $reziser->prezime = $request->prezime;
        $reziser->jmbg = $request->jmbg;
        $reziser->drzava = $request->drzava;

        $reziser->save();

        return response()->json(['Reziser is updated successfully.', new ReziserResource($reziser)]);
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
