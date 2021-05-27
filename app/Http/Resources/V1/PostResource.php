<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $arrResponse = array();
        $arrResponse['titulos'] = $this->title;
        $arrResponse['introduccion'] = $this->slug;
        $arrResponse['contenido'] = $this->content;
        return $arrResponse;
    }
}
