<?php

namespace App\Http\Resources\V2;

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
        $response = [
            'id' => $this->id,
            'postName' => $this->title,
            'intro' => $this->slug,
            'contenido' => $this->content,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email,

            ],
            'creado' => $this->created_at
        ];
        return $response;
    }
}
