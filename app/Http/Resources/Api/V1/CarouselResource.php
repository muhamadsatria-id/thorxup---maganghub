<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarouselResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'image_url' => $this->imageUrl(),
            'cta_label' => $this->cta_label,
            'cta_url' => $this->ctaHref(),
            'sort_order' => $this->sort_order,
        ];
    }
}
