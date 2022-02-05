<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


use App\Http\Resources\{MovieResource};
class FavouriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      return [
            'id' => $this->id,
            'movie'=>  new MovieResource($this->whenLoaded('movie'))


      ];


    }
}
