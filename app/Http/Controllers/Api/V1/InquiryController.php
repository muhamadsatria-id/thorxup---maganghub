<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreInquiryRequest;
use App\Http\Resources\Api\V1\InquiryResource;
use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;

class InquiryController extends Controller
{
    public function store(StoreInquiryRequest $request): JsonResponse
    {
        // Honeypot: return a normal-looking response without storing bot submissions.
        if ($request->filled('website')) {
            return response()->json([
                'message' => 'Terima kasih. Pesan Anda sudah kami terima.',
                'data' => null,
            ], 201);
        }

        $data = $request->validated();
        unset($data['website']);

        $inquiry = Inquiry::query()->create([
            ...$data,
            'status' => 'new',
        ]);

        $inquiry->load('product');

        return response()->json([
            'message' => 'Terima kasih. Tim Throx Up akan menghubungi Anda pada jam kerja.',
            'data' => new InquiryResource($inquiry),
        ], 201);
    }
}
