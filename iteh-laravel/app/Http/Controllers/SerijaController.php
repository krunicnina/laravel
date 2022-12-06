<?php

namespace App\Http\Controllers;

use App\Http\Resources\SerijaCollection;
use App\Models\Serija;
use Illuminate\Http\Request;

class SerijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serijas = Serija::all();
    
        return new SerijaCollection($serijas);
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
     * @param  \App\Models\Serija  $serija
     * @return \Illuminate\Http\Response
     */
    public function show(Serija $serija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serija  $serija
     * @return \Illuminate\Http\Response
     */
    public function edit(Serija $serija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serija  $serija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serija $serija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serija  $serija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serija $serija)
    {
        
            $serija->delete();
    
            return response()->json(['message' => 'Serija obrisana', 'id' => $serija->id]);
        }
   
}
