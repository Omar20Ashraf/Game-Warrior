<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecentReviewCollection extends JsonResource
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
            'evalution_color'   =>$this->evalution_color,
            'evalution' =>$this->evalution,
            'id'   =>$this->id,
            'title'   =>$this->title,
            'par'   =>$this->par,
        ];
    }
}
