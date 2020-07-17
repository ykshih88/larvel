<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatWithMovieResource extends JsonResource
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
            'user_id' => $this->user_id,
            'movie_id' => $this->movie_id,
            'rating' => $this->rating,
            'movie_detail'=>new MovieResource($this->movie)
        ];
    }
}
