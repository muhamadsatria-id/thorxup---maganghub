<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProfileResource;
use App\Models\ProfileBrand;

class ProfileController extends Controller
{
    public function __invoke(): ProfileResource
    {
        $profile = ProfileBrand::query()->first();

        abort_if($profile === null, 404, 'Profil brand belum tersedia.');

        return new ProfileResource($profile);
    }
}
