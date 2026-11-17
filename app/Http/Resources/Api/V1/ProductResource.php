<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->whenLoaded('category', fn (): ?CategoryResource => $this->category
                ? new CategoryResource($this->category)
                : null),
            'description' => $this->description,
            'benefits' => $this->benefitList(),
            'details' => $this->detailList(),
            'image_url' => $this->imageUrl(),
            'is_featured' => (bool) $this->is_featured,
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
