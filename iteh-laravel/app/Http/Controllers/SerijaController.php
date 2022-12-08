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
        $serijas = Serija::all();
    
        // return new SerijaCollection($serijas);
        return SerijaResource::collection($serijas);
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
    public function getByReziser($reziser_id){
        $serijas=Serija::get()->where('reziser_id',$reziser_id);

        if(count($serijas)==0){
            return response()->json('Dati reziser ne postoji u bazi!');
        }

        $my_serijas=array();
        foreach($serijas as $serija){
            array_push($my_serijas,new SerijaResource($serija));
        }

        return $my_serijas;
    }
    public function serijas(Request $request){
        $serijas=Serija::get()->where('user_id',Auth::user()->id);
        if(count($serijas)==0){
            return 'niste sacuvali seriju!';
        }
        $my_serijas=array();
        foreach($serijas as $serija){
            array_push($my_serijas,new SerijaResource($serija));
        }

        return $my_serijas;
    }

    public function getByZanr($zanr_id){
    $serijas=Serija::get()->where('zanr_id',$zanr_id);

        if(count($serijas)==0){
            return response()->json('Zanr sa datim ID-jem ne postoji');
        }

        $my_serijas=array();
        foreach($serijas as $serija){
            array_push($my_serijas,new SerijaResource($serija));
        }

        return $my_serijas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serijas = Serija::create($request->all());
        
        return new SerijaResource($serijas);
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
        // $validator=Validator::make($request->all(),[
        //     'naslov'=>'required|String|max:255',
        //     'premijera'=>'required|Integer|max:2023',
        //     'reziser_id'=>'required',
        //     'zanr_id'=>'required'


        // ]);
        // if($validator->fails()){
        //     return response()->json($validator->errors());
        // }
        // $serija=new serija;
        // $serija->naslov=$request->naslov;
        // $serija->produkcija=$request->produkcija;
        // $serija->premijera=$request->premijera;
        // $serija->user_id=Auth::user()->id;
        // $serija->zanr_id=$request->zanr_id;
        // $serija->reziser_id=$request->reziser_id;


        // $result=$serija->update();

        // if($result==false){
        //     return response()->json('Javio se problem');
        // }
        // return response()->json(['Uspesno izmenjena serija',new SerijaResource($serija)]);
        $serija->update($request->all());
        
        return new SerijaResource($serija);
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
