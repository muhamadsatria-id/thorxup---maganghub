<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Http\Requests\StoreInquiryRequest;
use Illuminate\Http\RedirectResponse;

class InquiryController extends Controller
{
    public function store(StoreInquiryRequest $request): RedirectResponse
    {
        // Honeypot: bot terisi, tetapi pengunjung tetap melihat respons sukses.
        if ($request->filled('website')) {
            return back()->with('status', 'Terima kasih. Pesan Anda sudah kami terima.');
        }

        $data = $request->validated();
        unset($data['website']);

        Inquiry::query()->create([
            ...$data,
            'status' => 'new',
        ]);

        return back()
            ->with('status', 'Terima kasih. Tim THORXup akan menghubungi Anda pada jam kerja.')
            ->withFragment('kontak');
    }
}
