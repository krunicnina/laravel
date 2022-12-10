<?php

namespace App\Http\Controllers;

use App\Http\Resources\SerijaCollection;
use App\Http\Resources\SerijaResource;
use App\Models\Serija;
use Database\Factories\SerijaFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SerijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serije = Serija::all();
    
       
        return SerijaResource::collection($serije);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //x
    }
    public function getByReziser($reziser_id){
        $serije=Serija::get()->where('reziser_id',$reziser_id);

        if(count($serije)==0){
            return response()->json('Dati režiser nije autor nijedne serije u bazi!');
        }

        $sve_serije=array();
        foreach($serije as $serija){
            array_push($sve_serije,new SerijaResource($serija));
        }

        return $sve_serije;
    }
  

    public function getByZanr($zanr_id){
    $serije=Serija::get()->where('zanr_id',$zanr_id);

        if(count($serije)==0){
            return response()->json('Žanr sa datim ID-jem ne postoji');
        }

        $sve_serije=array();
        foreach($serije as $serija){
            array_push($sve_serije,new SerijaResource($serija));
        }

        return $sve_serije;
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
            'naslov' => 'required|string|max:255',
            'premijera' => 'required',
            'reziser_id' => 'required',
            'zanr_id' => 'required',  
            
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $serija = Serija::create([
            'naslov' => $request->naslov,
            'premijera' => $request->premijera,
            'reziser_id' => $request->reziser_id,
            'zanr_id' => $request->zanr_id,
           
            
           
        ]);

        return response()->json(['Serija je uspešno kreirana.', new SerijaResource($serija)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serija  $serija
     * @return \Illuminate\Http\Response
     */
    public function show(Serija $serija)
    {
        return new SerijaResource($serija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serija  $serija
     * @return \Illuminate\Http\Response
     */
    public function edit(Serija $serija)
    {
        // x
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
        $validator=Validator::make($request->all(),[
            'naslov'=>'required|String|max:255',
            'premijera'=>'required|Integer|max:2023',
            'reziser_id'=>'required',
            'zanr_id'=>'required',
            


        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
       
        $serija->naslov=$request->naslov;
        $serija->premijera=$request->premijera;
        
        $serija->zanr_id=$request->zanr_id;
        $serija->reziser_id=$request->reziser_id;
        $serija->save();
        return response()->json(['Režiser je uspešno izmenjen.', new SerijaResource($serija)]);

        // $result= $serija->save();

        // if($result==false){
        //     return response()->json('Javio se problem');
        // }
        // return response()->json(['Uspešno izmenjena serija',new SerijaResource($serija)]);
        // $serija->update($request->all());
        
        // return new SerijaResource($serija);
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
