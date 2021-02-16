<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecentGameCollection extends JsonResource
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
            'id' =>$this->id,
            'image' =>$this->image,
            'image_button_class' =>$this->image_button_class,
            'image_button'   =>$this->image_button,
            'title'   =>$this->title,
            'par'   =>$this->par,
            'comments'   =>$this->recentGamecomment->count(),
        ];
    }
}
