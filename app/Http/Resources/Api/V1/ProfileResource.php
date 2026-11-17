<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'vision' => $this->vision,
            'mission' => $this->missionList(),
            'core_values' => $this->coreValueList(),
            'address' => $this->alamat,
            'email' => $this->email,
            'phone' => $this->phone,
            'phone_url' => $this->phoneUrl(),
            'whatsapp' => $this->whatsapp,
            'whatsapp_url' => $this->whatsappUrl(),
            'maps_url' => $this->maps_link,
            'socials' => $this->socialLinks(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
