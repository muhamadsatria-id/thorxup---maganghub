# THORXup API v1

REST API publik untuk konten company profile THORXup. Semua endpoint mengembalikan JSON dan dapat diuji langsung melalui Postman.

## Base URL

```text
http://127.0.0.1:8000/api/v1
```

Saat production, ganti dengan domain aplikasi, misalnya:

```text
https://thorxup.id/api/v1
```

## Header

Kirim header berikut pada setiap request:

```http
Accept: application/json
Content-Type: application/json
```

`Content-Type` hanya diperlukan untuk request yang memiliki body (`POST`/`PUT`/`PATCH`).

## Format respons

Respons daftar menggunakan format pagination Laravel:

```json
{
  "data": [],
  "links": {
    "first": "...",
    "last": "...",
    "prev": null,
    "next": "..."
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 12,
    "to": 1,
    "total": 1
  }
}
```

Respons detail menggunakan format:

```json
{
  "data": {}
}
```

Error validasi menggunakan status `422`:

```json
{
  "message": "Nama dan instansi wajib diisi. (and 4 more errors)",
  "errors": {
    "name": ["Nama dan instansi wajib diisi."]
  }
}
```

---

## Endpoint

| Method | Path | Deskripsi |
|---|---|---|
| GET | `/health` | Cek status API |
| GET | `/home` | Data agregat untuk halaman beranda |
| GET | `/profile` | Profil brand, kontak, dan social links |
| GET | `/carousels` | Slide carousel yang aktif |
| GET | `/categories` | Daftar kategori aktif |
| GET | `/categories/{id}` | Detail kategori |
| GET | `/products` | Daftar produk aktif |
| GET | `/products/{id}` | Detail produk |
| GET | `/news` | Daftar berita yang sudah terbit |
| GET | `/news/{id}` | Detail berita |
| POST | `/inquiries` | Kirim pertanyaan / permintaan penawaran |

---

## GET /health

Contoh respons:

```json
{
  "status": "ok",
  "service": "THORXup API",
  "version": "v1",
  "timestamp": "2026-11-17T02:00:00+00:00"
}
```

---

## GET /home

Mengembalikan data yang dibutuhkan halaman beranda dalam satu request:

- `profile`
- `carousels`
- `categories`
- `featured_products` (maksimal 6, produk unggulan lebih dulu)
- `latest_news` (3 berita terbaru)
- `stats`

Contoh:

```json
{
  "data": {
    "profile": {
      "id": 1,
      "name": "THORXup",
      "vision": "...",
      "mission": ["..."],
      "core_values": ["Presisi", "Konsistensi"],
      "address": "...",
      "email": "halo@thorxup.id",
      "phone": "+62 812 3456 7890",
      "phone_url": "tel:+6281234567890",
      "whatsapp": "081234567890",
      "whatsapp_url": "https://wa.me/6281234567890",
      "maps_url": "https://maps.google.com/...",
      "socials": [
        { "label": "Instagram", "url": "https://www.instagram.com/thorxup" }
      ]
    },
    "carousels": [],
    "categories": [],
    "featured_products": [],
    "latest_news": [],
    "stats": {
      "products": 10,
      "categories": 6,
      "published_news": 4
    }
  }
}
```

---

## GET /profile

Mengembalikan profil brand. Jika profil belum diisi, API mengembalikan `404`.

---

## GET /carousels

Hanya mengembalikan carousel dengan `is_active = true`, diurutkan berdasarkan `sort_order`.

Contoh item:

```json
{
  "id": 1,
  "title": "Perlindungan permukaan logam untuk industri yang menuntut.",
  "subtitle": "Perawatan logam industri",
  "description": "...",
  "image_url": "http://127.0.0.1:8000/images/hero.jpg",
  "cta_label": "Lihat katalog",
  "cta_url": "http://127.0.0.1:8000/products",
  "sort_order": 1
}
```

---

## GET /categories

Query parameter: tidak ada.

Setiap item berisi jumlah produk aktif:

```json
{
  "data": [
    {
      "id": 1,
      "name": "Protective Coating",
      "description": "Lapisan pelindung untuk ketahanan korosi pada logam industri.",
      "products_count": 2,
      "sort_order": 1
    }
  ]
}
```

## GET /categories/{id}

Contoh:

```http
GET /api/v1/categories/1
```

Mengembalikan `404` jika kategori tidak aktif atau tidak ditemukan.

Untuk mengambil produk dalam kategori:

```http
GET /api/v1/products?category=1
```

---

## GET /products

Query parameter:

| Parameter | Tipe | Default | Keterangan |
|---|---|---|---|
| `q` | string | - | Cari pada nama, deskripsi, dan benefits |
| `category` | integer | - | Filter berdasarkan ID kategori |
| `featured` | boolean | - | `1`/`true` hanya produk unggulan, `0`/`false` non-unggulan |
| `sort` | string | `default` | `default`, `name`, `newest`, `oldest` |
| `per_page` | integer | `12` | 1 sampai 50 |
| `page` | integer | `1` | Halaman hasil |

Contoh:

```http
GET /api/v1/products?q=coating&category=1&featured=true&sort=name&per_page=6
```

Contoh item:

```json
{
  "id": 1,
  "name": "TX-Protect EP 500",
  "category": {
    "id": 1,
    "name": "Protective Coating",
    "description": "...",
    "sort_order": 1
  },
  "description": "Protective coating dengan adhesi optimal...",
  "benefits": [
    "Suara tajam dan konsisten di lapangan terbuka",
    "Shell maple 8 ply dengan bearing edge presisi"
  ],
  "details": [
    "Diameter 14 inci, kedalaman 6,5 inci",
    "Berat 4,2 kg"
  ],
  "image_url": null,
  "is_featured": true,
  "sort_order": 1,
  "created_at": "2026-11-16T15:12:13+00:00",
  "updated_at": "2026-11-16T15:12:13+00:00"
}
```

Hanya produk dengan `is_active = true` yang ditampilkan.

## GET /products/{id}

Mengembalikan detail satu produk. `404` jika produk tidak aktif atau tidak ditemukan.

---

## GET /news

Query parameter:

| Parameter | Tipe | Default | Keterangan |
|---|---|---|---|
| `q` | string | - | Cari pada judul dan konten |
| `per_page` | integer | `10` | 1 sampai 50 |
| `page` | integer | `1` | Halaman hasil |

Hanya berita dengan `published_at` terisi dan tidak melewati waktu sekarang yang ditampilkan. Berita draf tidak akan muncul.

Item daftar berisi `excerpt` (bukan HTML penuh):

```json
{
  "id": 1,
  "title": "Memilih protective coating yang tepat untuk baja karbon",
  "excerpt": "Ketahanan lapisan ditentukan oleh formulasi...",
  "image_url": null,
  "author": "Tim THORXup",
  "published_at": "2026-11-10T00:00:00+00:00",
  "created_at": "2026-11-16T15:12:13+00:00",
  "updated_at": "2026-11-16T15:12:13+00:00"
}
```

## GET /news/{id}

Mengembalikan detail berita termasuk `content` dalam bentuk HTML.

```json
{
  "data": {
    "id": 1,
    "title": "...",
    "excerpt": "...",
    "content": "<p>...</p>",
    "image_url": null,
    "author": "Tim THORXup",
    "published_at": "2026-11-10T00:00:00+00:00"
  }
}
```

---

## POST /inquiries

Menyimpan pertanyaan atau permintaan penawaran ke panel admin.

Body:

```json
{
  "name": "PT Nusantara Manufacturing",
  "company": "PT Nusantara Manufacturing",
  "email": "humas@example.com",
  "phone": "081234567890",
  "product_id": 1,
  "quantity": 8,
  "subject": "Penawaran coating untuk lini produksi",
  "message": "Kami ingin meminta penawaran protective coating untuk lini produksi."
}
```

Aturan validasi:

| Field | Wajib | Aturan |
|---|---|---|
| `name` | Ya | string, maks. 100 karakter |
| `company` | Tidak | string, maks. 120 karakter |
| `email` | Ya | format email, maks. 150 karakter |
| `phone` | Ya | string, maks. 30 karakter, angka/`+`/`-`/spasi/tanda kurung |
| `product_id` | Tidak | ID produk aktif yang ada |
| `quantity` | Tidak | integer 1–10000 |
| `subject` | Ya | string, maks. 150 karakter |
| `message` | Ya | string, 20–3000 karakter |
| `website` | Tidak | honeypot; isi hanya jika request berasal dari bot |

Respons sukses `201`:

```json
{
  "message": "Terima kasih. Tim THORXup akan menghubungi Anda pada jam kerja.",
  "data": {
    "id": 4,
    "name": "PT Nusantara Manufacturing",
    "company": "PT Nusantara Manufacturing",
    "email": "humas@example.com",
    "phone": "081234567890",
    "product_id": 1,
    "product": {
      "id": 1,
      "name": "TX-Protect EP 500"
    },
    "quantity": 8,
    "subject": "Penawaran coating untuk lini produksi",
    "message": "Kami ingin meminta penawaran protective coating untuk lini produksi.",
    "status": "new",
    "status_label": "Baru",
    "created_at": "2026-11-17T02:00:00+00:00"
  }
}
```

Catatan:

- Endpoint dibatasi 10 request per menit per IP.
- Honeypot `website` yang terisi akan menghasilkan respons sukses tanpa menyimpan data.
- Data inquiry dapat dikelola melalui panel admin Filament di `/admin`.

---

## Status code

| Status | Arti |
|---|---|
| `200` | Request berhasil |
| `201` | Data berhasil dibuat |
| `404` | Data tidak ditemukan atau tidak aktif |
| `422` | Validasi gagal |
| `429` | Terlalu banyak request |
| `500` | Kesalahan server |

## Postman

Import file berikut ke Postman:

```text
docs/thorxup-api.postman_collection.json
```

Collection sudah menyediakan variabel:

- `base_url` = `http://127.0.0.1:8000/api/v1`
- `product_id` = `1`
- `category_id` = `1`
- `news_id` = `1`

Sesuaikan ID jika data di database berbeda.

## Menjalankan server

```sh
php artisan serve
```

Jalankan migration dan seeder jika database masih kosong:

```sh
php artisan migrate:fresh --seed
```
