<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;

class NewsResource extends NewsSummaryResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            ...parent::toArray($request),
            'content' => $this->content,
        ];
    }
}
