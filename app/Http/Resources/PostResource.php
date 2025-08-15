<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
         [
    'id'          => $this->id,
    'title'       => $this->title,
    'slug'        => $this->slug,
    'content'     => $this->content,
    'status'      => $this->status,
    'category_id' => $this->category_id,
    'user_id'     => $this->user_id,
    'created_at'  => $this->created_at->format('Y-m-d H:i:s'),
];

    }
}
