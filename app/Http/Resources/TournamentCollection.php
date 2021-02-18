<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TournamentCollection extends JsonResource
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
                'title'   =>$this->title,
                'beggins' =>$this->beggins,
                'ends'   =>$this->ends,
                'participants'   =>$this->participants,
                'author'   =>$this->author,
                'prizes'   =>$this->prizes,
        ];
    }
}
