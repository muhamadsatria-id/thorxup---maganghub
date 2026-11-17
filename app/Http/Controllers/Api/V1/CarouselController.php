<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CarouselResource;
use App\Models\Carousel;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CarouselController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CarouselResource::collection(
            Carousel::query()->active()->ordered()->get()
        );
    }
}
