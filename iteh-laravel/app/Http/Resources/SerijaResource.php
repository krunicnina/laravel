<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SerijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'serija';
    public function toArray($request)
    {
        return [
            
            'naslov'=> $this -> resource->naslov,
            'premijera' => $this -> resource->premijera,
            'reziser'=> new ReziserResource($this -> resource->reziser),
             'zanr'=>new ZanrResource($this -> resource->zanr),

          ];
    }
}
