<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'address' => $this->address ? $this->address : ' ',
            'name'   =>$this->name ? $this->name : ' ',
            'description'   =>$this->description ? $this->description : ' ',
            'phone'   =>$this->phone ? $this->phone : ' ',
            'email'   =>$this->email ? $this->email : ' ',
            'facebook'   =>$this->facebook ? $this->facebook : ' ',
            'twitter'   =>$this->twitter ? $this->twitter : ' ',
            'github'   =>$this->github ? $this->github : ' ',
            'linkedin'   =>$this->linkedin ? $this->linkedin : ' ',
        ];
    }
}
