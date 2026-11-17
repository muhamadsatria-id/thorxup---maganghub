@props(['products' => collect(), 'profile' => null])

@php
    $selectedProduct = old('product_id', request('product'));
    $inputClass = 'mt-2 w-full rounded-xl border border-line bg-white px-4 py-3 text-sm text-ink shadow-sm outline-none transition placeholder:text-muted/60 focus:border-brand-500 focus:ring-2 focus:ring-brand-200';
    $errorClass = 'border-rose-400 focus:border-rose-500 focus:ring-rose-200';
@endphp

<form action="{{ route('contact.store') }}" method="POST" class="grid gap-5" data-inquiry-form>
    @csrf

    <div class="hidden" aria-hidden="true">
        <label for="website">Website</label>
        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
    </div>

    <div class="grid gap-5 sm:grid-cols-2">
        <div>
            <label for="name" class="text-sm font-semibold text-brand-950">Nama / instansi <span class="text-rose-500">*</span></label>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name') }}"
                required
                autocomplete="name"
                placeholder="Nama PIC atau sekolah"
                @class([$inputClass, $errorClass => $errors->has('name')])
                @if ($errors->has('name')) aria-invalid="true" aria-describedby="name-error" @endif
            >
            @error('name')
                <p id="name-error" class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="company" class="text-sm font-semibold text-brand-950">Nama tim / komunitas</label>
            <input
                id="company"
                name="company"
                type="text"
                value="{{ old('company') }}"
                autocomplete="organization"
                placeholder="Opsional"
                @class([$inputClass, $errorClass => $errors->has('company')])
            >
            @error('company')
                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid gap-5 sm:grid-cols-2">
        <div>
            <label for="email" class="text-sm font-semibold text-brand-950">Email <span class="text-rose-500">*</span></label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                placeholder="nama@email.com"
                @class([$inputClass, $errorClass => $errors->has('email')])
                @if ($errors->has('email')) aria-invalid="true" aria-describedby="email-error" @endif
            >
            @error('email')
                <p id="email-error" class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone" class="text-sm font-semibold text-brand-950">Telepon / WhatsApp <span class="text-rose-500">*</span></label>
            <input
                id="phone"
                name="phone"
                type="tel"
                value="{{ old('phone') }}"
                required
                autocomplete="tel"
                placeholder="08xx xxxx xxxx"
                @class([$inputClass, $errorClass => $errors->has('phone')])
                @if ($errors->has('phone')) aria-invalid="true" aria-describedby="phone-error" @endif
            >
            @error('phone')
                <p id="phone-error" class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid gap-5 sm:grid-cols-[1.4fr_0.6fr]">
        <div>
            <label for="product_id" class="text-sm font-semibold text-brand-950">Produk yang diminati</label>
            <select id="product_id" name="product_id" @class([$inputClass, $errorClass => $errors->has('product_id')])>
                <option value="">Belum menentukan</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" @selected((string) $selectedProduct === (string) $product->id)>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
            @error('product_id')
                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="quantity" class="text-sm font-semibold text-brand-950">Perkiraan jumlah</label>
            <input
                id="quantity"
                name="quantity"
                type="number"
                min="1"
                max="10000"
                value="{{ old('quantity') }}"
                placeholder="Opsional"
                @class([$inputClass, $errorClass => $errors->has('quantity')])
            >
            @error('quantity')
                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="subject" class="text-sm font-semibold text-brand-950">Topik pesan <span class="text-rose-500">*</span></label>
        <input
            id="subject"
            name="subject"
            type="text"
            value="{{ old('subject') }}"
            required
            placeholder="Contoh: Penawaran snare untuk tim sekolah"
            @class([$inputClass, $errorClass => $errors->has('subject')])
            @if ($errors->has('subject')) aria-invalid="true" aria-describedby="subject-error" @endif
        >
        @error('subject')
            <p id="subject-error" class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="message" class="text-sm font-semibold text-brand-950">Ceritakan kebutuhan Anda <span class="text-rose-500">*</span></label>
        <textarea
            id="message"
            name="message"
            rows="5"
            required
            placeholder="Jenis instrumen, jumlah personel, warna, tenggat waktu, dan detail lain yang membantu."
            @class([$inputClass, $errorClass => $errors->has('message')])
            @if ($errors->has('message')) aria-invalid="true" aria-describedby="message-error" @endif
        >{{ old('message') }}</textarea>
        @error('message')
            <p id="message-error" class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
        @enderror
        <p class="mt-1.5 text-xs text-muted">Minimal 20 karakter. Semakin lengkap, semakin cepat kami menyiapkan penawaran.</p>
    </div>

    <div class="flex flex-wrap items-center gap-4">
        <button type="submit" class="btn btn-primary">
            Kirim pesan
            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="M3.5 10h13m0 0-4.5-4.5M16.5 10 12 14.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <p class="text-xs leading-5 text-muted">
            Kami membalas pada jam kerja, Senin–Sabtu 08.00–17.00 WIB.
        </p>
    </div>
</form>
