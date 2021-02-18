<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogGameCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'image' =>$this->image,
            'button_color'   =>$this->button_color,
            'button'   =>$this->button,
            'name'   =>$this->name,
            'id'   =>$this->id,
            'par'   =>$this->par,
            'comment'   =>$this->blogGamesComment->count(),
        ];
    }
}
