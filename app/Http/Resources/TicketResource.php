<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->ID,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'status' => $this->status,
            'created' => $this->created_at,
            'updated' => $this->updated_1at,
        ];
    }
}
