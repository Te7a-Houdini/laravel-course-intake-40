<?php

namespace App\Http\Resources;

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
        return [
            'posted_by'=> $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'id' => $this->id,
            'user_info' => [
                'id' => $this->user ? $this->user->id : 'not exist',
                'user_name' => $this->user ? $this->user->name : 'not exist',
                'user_email' => $this->user ? $this->user->email : 'not exist'
            ]
        ];
    }
}
