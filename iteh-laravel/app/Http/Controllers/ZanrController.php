<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZanrResource;
use App\Models\Zanr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZanrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sviZanrovi = Zanr::all();
        return ZanrResource::collection($sviZanrovi);
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
            'naziv_zanra' => 'required|string',
           
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska u zahtevu!', $validator->errors()]);
        }

        $zanr = Zanr::create([
            'naziv_zanra' => $request->naziv_zanra,
           
        ]);

        return response()->json(['Novi žanr je ubačen u bazu!.', new ZanrResource($zanr)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function show(Zanr $zanr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function edit(Zanr $zanr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zanr $zanr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zanr $zanr)
    {
        $zanr->delete();
        return response()->json('Obrisan je željeni žanr!');
    }
}
