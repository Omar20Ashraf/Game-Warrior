<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeatureCollection extends JsonResource
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
           'id'   =>$this->id,
           'image' =>$this->image,
           'button' =>$this->button,
           'par'   =>$this->par,
           'title'   =>$this->title,
           'button_color'   =>$this->button_color,
           'comments' => $this->featureComment->count(),
       ];
    }
}
