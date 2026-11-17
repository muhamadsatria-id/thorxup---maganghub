<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InquiryResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'company' => $this->company,
            'email' => $this->email,
            'phone' => $this->phone,
            'product_id' => $this->product_id,
            'product' => $this->whenLoaded('product', fn (): ?ProductResource => $this->product
                ? new ProductResource($this->product)
                : null),
            'quantity' => $this->quantity,
            'subject' => $this->subject,
            'message' => $this->message,
            'status' => $this->status,
            'status_label' => $this->statusLabel(),
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
