# Dokumentasi Backend THORXup

Dokumen ini menjelaskan backend REST API THORXup, struktur kode, aturan data, contoh request/response, dan langkah pengujian manual menggunakan Postman.

Dokumen ini melengkapi:

- `docs/API.md` — referensi endpoint yang lebih ringkas.
- `docs/thorxup-api.postman_collection.json` — collection Postman siap import.

---

## 1. Ringkasan

Backend THORXup dibangun dengan:

- Laravel 13
- PHP 8.3+
- MySQL untuk database lokal
- Eloquent ORM
- Laravel Form Request untuk validasi
- Laravel API Resource untuk format JSON
- Rate limiting untuk endpoint inquiry
- Filament untuk panel admin di `/admin` (terpisah dari API publik)

API publik tidak memerlukan login. Endpoint admin tidak diekspos melalui API publik; pengelolaan konten dilakukan melalui panel Filament.

Base URL lokal:

```text
http://127.0.0.1:8000/api/v1
```

Base URL production dapat disesuaikan menjadi:

```text
https://thorxup.id/api/v1
```

---

## 2. Struktur backend

File utama backend:

```text
routes/
├── api.php                         # Semua route REST API v1
└── web.php                         # Route halaman publik

app/Http/Controllers/Api/V1/
├── HomeController.php              # Data agregat beranda
├── ProfileController.php           # Profil brand
├── CarouselController.php          # Slide carousel
├── CategoryController.php          # Kategori
├── ProductController.php           # Produk
├── NewsController.php              # Berita
└── InquiryController.php           # Penyimpanan inquiry

app/Http/Requests/Api/V1/
└── StoreInquiryRequest.php         # Validasi form inquiry

app/Http/Resources/Api/V1/
├── ProfileResource.php
├── CarouselResource.php
├── CategoryResource.php
├── ProductResource.php
├── NewsSummaryResource.php
├── NewsResource.php
└── InquiryResource.php

app/Models/
├── Product.php
├── Category.php
├── News.php
├── Carousel.php
├── ProfileBrand.php
├── Inquiry.php
└── User.php

database/
├── migrations/                     # Struktur tabel
├── factories/                      # Data testing
└── seeders/                        # Data awal/demo

tests/Feature/Api/V1/
└── PublicApiTest.php               # Test otomatis API

docs/
├── API.md
├── backend.md
└── thorxup-api.postman_collection.json
```

---

## 3. Setup backend lokal

Jalankan dari root project:

```sh
composer install
```

Jika file `.env` belum ada:

```sh
cp .env.example .env
php artisan key:generate
```

Sesuaikan koneksi database di `.env`. Konfigurasi lokal project ini menggunakan MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projects_maganghub_db
DB_USERNAME=root
DB_PASSWORD=
```

Buat database jika belum ada, lalu jalankan migration dan seeder:

```sh
php artisan migrate:fresh --seed
```

> **Peringatan:** `migrate:fresh` menghapus seluruh tabel dan data yang ada. Gunakan hanya di lingkungan lokal/development.

Jalankan server:

```sh
php artisan serve
```

Server default:

```text
http://127.0.0.1:8000
```

---

## 4. Data hasil seeder

Setelah `migrate:fresh --seed`, data demo yang tersedia:

| Data | Jumlah | Keterangan |
|---|---:|---|
| Profil brand | 1 | `id = 1` |
| Kategori | 6 | `id = 1` sampai `6` |
| Produk | 10 | `id = 1` sampai `10` |
| Berita terbit | 4 | `id = 1` sampai `4` |
| Berita draf | 1 | `id = 5`, tidak muncul di API |
| Carousel aktif | 3 | `id = 1` sampai `3` |
| Inquiry contoh | 3 | `id = 1` sampai `3` |
| Admin | 1 | `admin@thorxup.id` / `password` |

Kategori:

| ID | Nama |
|---:|---|
| 1 | Snare Drum |
| 2 | Bass Drum |
| 3 | Tenor & Quint |
| 4 | Cymbal |
| 5 | Kostum & Aksesori |
| 6 | Mayoret & Color Guard |

Produk unggulan awal:

| ID | Produk |
|---:|---|
| 1 | Snare Drum Marching 14 inci |
| 2 | Bass Drum Marching 28 inci |
| 3 | Tenor Quint Set |

Jika ID berbeda karena database sudah pernah diubah, ambil ID terbaru melalui endpoint kategori atau produk.

---

## 5. Header request

Gunakan header berikut untuk semua request API:

```http
Accept: application/json
Content-Type: application/json
```

`Content-Type` wajib untuk request yang memiliki body, terutama `POST /inquiries`.

Jika `Accept: application/json` tidak dikirim, error validasi bisa dikembalikan dalam format yang berbeda atau request bisa diarahkan ke halaman web.

---

## 6. Format respons

### 6.1 Respons daftar/pagination

Endpoint daftar menggunakan pagination Laravel:

```json
{
  "data": [],
  "links": {
    "first": "http://127.0.0.1:8000/api/v1/products?page=1",
    "last": "http://127.0.0.1:8000/api/v1/products?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 12,
    "to": 10,
    "total": 10
  }
}
```

Query `page` dan `per_page` otomatis ditangani Laravel.

### 6.2 Respons detail

```json
{
  "data": {
    "id": 1,
    "name": "Contoh"
  }
}
```

### 6.3 Respons sukses pembuatan data

`POST /inquiries` mengembalikan status `201`:

```json
{
  "message": "Terima kasih. Tim THORXup akan menghubungi Anda pada jam kerja.",
  "data": {}
}
```

### 6.4 Respons error validasi

Status `422`:

```json
{
  "message": "Nama dan instansi wajib diisi. (and 4 more errors)",
  "errors": {
    "name": ["Nama dan instansi wajib diisi."],
    "email": ["Email wajib diisi."],
    "phone": ["Nomor telepon atau WhatsApp wajib diisi."],
    "subject": ["Topik pesan wajib diisi."],
    "message": ["Pesan wajib diisi."]
  }
}
```

### 6.5 Format tanggal

Semua tanggal dikembalikan dalam format ISO 8601, contoh:

```text
2026-11-17T02:09:12+00:00
```

---

## 7. Daftar endpoint

| Method | Path | Deskripsi |
|---|---|---|
| GET | `/health` | Cek status API |
| GET | `/home` | Data agregat untuk beranda |
| GET | `/profile` | Profil brand dan kontak |
| GET | `/carousels` | Carousel aktif |
| GET | `/categories` | Daftar kategori aktif |
| GET | `/categories/{id}` | Detail kategori |
| GET | `/products` | Daftar produk aktif |
| GET | `/products/{id}` | Detail produk |
| GET | `/news` | Daftar berita terbit |
| GET | `/news/{id}` | Detail berita |
| POST | `/inquiries` | Kirim inquiry / permintaan penawaran |

---

## 8. Detail endpoint

### 8.1 GET /health

Cek apakah API berjalan.

Request:

```http
GET /api/v1/health
```

Contoh respons `200`:

```json
{
  "status": "ok",
  "service": "THORXup API",
  "version": "v1",
  "timestamp": "2026-11-17T02:02:41+00:00"
}
```

---

### 8.2 GET /home

Mengambil data yang dibutuhkan halaman beranda dalam satu request.

Request:

```http
GET /api/v1/home
```

Isi respons:

| Field | Keterangan |
|---|---|
| `profile` | Profil brand atau `null` |
| `carousels` | Semua carousel aktif |
| `categories` | Kategori aktif + `products_count` |
| `featured_products` | Maksimal 6 produk, unggulan lebih dulu |
| `latest_news` | 3 berita terbaru |
| `stats` | Jumlah produk, kategori, dan berita terbit |

Contoh respons (diringkas):

```json
{
  "data": {
    "profile": {
      "id": 1,
      "name": "THORXup",
      "vision": "Menjadi mitra drumband paling tepercaya di Indonesia...",
      "mission": [
        "Memproduksi perlengkapan drumband dengan bahan pilihan...",
        "Mendampingi tim dari pemilihan instrumen...",
        "Menjaga layanan purna jual yang cepat..."
      ],
      "core_values": ["Presisi", "Konsistensi", "Kejujuran", "Kolaborasi"],
      "address": "Jl. Cigondewah Kaler No. 24, Bandung, Jawa Barat 40214",
      "email": "halo@thorxup.id",
      "phone": "+62 812 3456 7890",
      "phone_url": "tel:+6281234567890",
      "whatsapp": "081234567890",
      "whatsapp_url": "https://wa.me/6281234567890",
      "maps_url": "https://maps.google.com/?q=Jl.+Cigondewah+Kaler+No.+24+Bandung",
      "socials": [
        {
          "label": "Instagram",
          "url": "https://www.instagram.com/thorxup"
        }
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

### 8.3 GET /profile

Request:

```http
GET /api/v1/profile
```

Contoh respons:

```json
{
  "data": {
    "id": 1,
    "name": "THORXup",
    "vision": "Menjadi mitra drumband paling tepercaya di Indonesia...",
    "mission": [
      "Memproduksi perlengkapan drumband dengan bahan pilihan dan kontrol kualitas di setiap tahap.",
      "Mendampingi tim dari pemilihan instrumen hingga penyesuaian kostum.",
      "Menjaga layanan purna jual yang cepat, jelas, dan bisa diandalkan."
    ],
    "core_values": ["Presisi", "Konsistensi", "Kejujuran", "Kolaborasi"],
    "address": "Jl. Cigondewah Kaler No. 24, Bandung, Jawa Barat 40214",
    "email": "halo@thorxup.id",
    "phone": "+62 812 3456 7890",
    "phone_url": "tel:+6281234567890",
    "whatsapp": "081234567890",
    "whatsapp_url": "https://wa.me/6281234567890",
    "maps_url": "https://maps.google.com/?q=Jl.+Cigondewah+Kaler+No.+24+Bandung",
    "socials": [
      { "label": "Instagram", "url": "https://www.instagram.com/thorxup" },
      { "label": "Facebook", "url": "https://www.facebook.com/thorxup" },
      { "label": "YouTube", "url": "https://www.youtube.com/@thorxup" }
    ],
    "updated_at": "2026-11-16T15:12:13+00:00"
  }
}
```

Jika profil belum tersedia, API mengembalikan `404`.

---

### 8.4 GET /carousels

Request:

```http
GET /api/v1/carousels
```

Hanya carousel dengan `is_active = true`, diurutkan berdasarkan `sort_order`.

Contoh respons:

```json
{
  "data": [
    {
      "id": 1,
      "title": "Bunyi rapi. Tampilan berani. Siap panggung.",
      "subtitle": "Perlengkapan drumband performa",
      "description": "Snare, bass, tenor, cymbal, sampai kostum...",
      "image_url": "http://127.0.0.1:8000/images/hero.jpg",
      "cta_label": "Lihat katalog",
      "cta_url": "http://127.0.0.1:8000/products",
      "sort_order": 1
    }
  ]
}
```

`cta_url` relatif seperti `/products` otomatis diubah menjadi URL lengkap. Jika `cta_url` sudah berupa URL absolut, nilainya dipertahankan.

---

### 8.5 GET /categories

Request:

```http
GET /api/v1/categories
```

Hanya kategori aktif. `products_count` menghitung produk aktif di kategori tersebut.

Contoh respons:

```json
{
  "data": [
    {
      "id": 1,
      "name": "Snare Drum",
      "description": "Snare marching dengan artikulasi tegas untuk barisan depan.",
      "products_count": 2,
      "sort_order": 1
    },
    {
      "id": 2,
      "name": "Bass Drum",
      "description": "Bass drum bervolume besar dengan nada rendah yang stabil.",
      "products_count": 2,
      "sort_order": 2
    }
  ]
}
```

#### GET /categories/{id}

Request:

```http
GET /api/v1/categories/1
```

Respons berisi detail kategori dan jumlah produk aktif:

```json
{
  "data": {
    "id": 1,
    "name": "Snare Drum",
    "description": "Snare marching dengan artikulasi tegas untuk barisan depan.",
    "products_count": 2,
    "sort_order": 1
  }
}
```

Kategori nonaktif atau ID yang tidak ada akan menghasilkan `404`.

Untuk mengambil produk dalam kategori tertentu:

```http
GET /api/v1/products?category=1
```

---

### 8.6 GET /products

Request dasar:

```http
GET /api/v1/products
```

Query parameter:

| Parameter | Tipe | Default | Keterangan |
|---|---|---|---|
| `q` | string | - | Cari di nama, deskripsi, dan benefits |
| `category` | integer | - | Filter berdasarkan ID kategori |
| `featured` | boolean | - | `true`/`1` untuk unggulan, `false`/`0` untuk non-unggulan |
| `sort` | string | `default` | `default`, `name`, `newest`, `oldest` |
| `per_page` | integer | `12` | Minimal 1, maksimal 50 |
| `page` | integer | `1` | Halaman hasil |

Contoh request dengan filter:

```http
GET /api/v1/products?q=snare&category=1&featured=true&sort=name&per_page=6&page=1
```

Contoh respons:

```json
{
  "data": [
    {
      "id": 1,
      "name": "Snare Drum Marching 14 inci",
      "category": {
        "id": 1,
        "name": "Snare Drum",
        "description": "Snare marching dengan artikulasi tegas untuk barisan depan.",
        "sort_order": 1
      },
      "description": "Snare dengan proyeksi tinggi dan artikulasi tegas, dirancang untuk barisan depan yang bergerak cepat.",
      "benefits": [
        "Suara tajam dan konsisten di lapangan terbuka",
        "Shell maple 8 ply dengan bearing edge presisi",
        "Tension rod kuningan yang mudah disetel ulang"
      ],
      "details": [
        "Diameter 14 inci, kedalaman 6,5 inci",
        "Berat 4,2 kg",
        "Termasuk tas jinjing berbusa"
      ],
      "image_url": null,
      "is_featured": true,
      "sort_order": 1,
      "created_at": "2026-11-16T15:12:13+00:00",
      "updated_at": "2026-11-16T15:12:13+00:00"
    }
  ],
  "links": {
    "first": "http://127.0.0.1:8000/api/v1/products?q=snare&category=1&featured=true&sort=name&per_page=6&page=1",
    "last": "http://127.0.0.1:8000/api/v1/products?q=snare&category=1&featured=true&sort=name&per_page=6&page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 6,
    "to": 1,
    "total": 1
  }
}
```

Hanya produk dengan `is_active = true` yang dikembalikan.

#### GET /products/{id}

```http
GET /api/v1/products/1
```

Respons:

```json
{
  "data": {
    "id": 1,
    "name": "Snare Drum Marching 14 inci",
    "category": {
      "id": 1,
      "name": "Snare Drum",
      "description": "Snare marching dengan artikulasi tegas untuk barisan depan.",
      "sort_order": 1
    },
    "description": "Snare dengan proyeksi tinggi...",
    "benefits": [],
    "details": [],
    "image_url": null,
    "is_featured": true,
    "sort_order": 1,
    "created_at": "2026-11-16T15:12:13+00:00",
    "updated_at": "2026-11-16T15:12:13+00:00"
  }
}
```

Produk nonaktif atau ID yang tidak ada menghasilkan `404`.

---

### 8.7 GET /news

Request:

```http
GET /api/v1/news
```

Query parameter:

| Parameter | Tipe | Default | Keterangan |
|---|---|---|---|
| `q` | string | - | Cari di judul dan konten |
| `per_page` | integer | `10` | Minimal 1, maksimal 50 |
| `page` | integer | `1` | Halaman hasil |

Hanya berita yang sudah terbit (`published_at` tidak kosong dan tidak melewati waktu sekarang) yang dikembalikan. Berita draf tidak muncul.

Contoh request:

```http
GET /api/v1/news?q=snare&per_page=6
```

Contoh respons:

```json
{
  "data": [
    {
      "id": 1,
      "title": "Kesalahan umum saat memilih snare drum untuk sekolah",
      "excerpt": "Snare drum sering dipilih hanya berdasarkan harga, padahal ukuran dan konstruksi shell menentukan seberapa mudah tim menyetel nadanya.",
      "image_url": null,
      "author": "Tim THORXup",
      "published_at": "2026-11-10T09:00:00+00:00",
      "created_at": "2026-11-16T15:12:13+00:00",
      "updated_at": "2026-11-16T15:12:13+00:00"
    }
  ],
  "links": {},
  "meta": {}
}
```

`excerpt` dibuat dari konten HTML yang dibersihkan dari tag, bukan HTML mentah.

#### GET /news/{id}

Request:

```http
GET /api/v1/news/1
```

Respons detail menyertakan `content` berupa HTML:

```json
{
  "data": {
    "id": 1,
    "title": "Kesalahan umum saat memilih snare drum untuk sekolah",
    "excerpt": "Snare drum sering dipilih hanya berdasarkan harga...",
    "image_url": null,
    "author": "Tim THORXup",
    "published_at": "2026-11-10T09:00:00+00:00",
    "created_at": "2026-11-16T15:12:13+00:00",
    "updated_at": "2026-11-16T15:12:13+00:00",
    "content": "<p>Snare drum sering dipilih hanya berdasarkan harga...</p>"
  }
}
```

Berita draf, misalnya `id = 5` pada data seeder, menghasilkan `404`.

---

### 8.8 POST /inquiries

Menyimpan pertanyaan atau permintaan penawaran dari calon pelanggan.

Request:

```http
POST /api/v1/inquiries
```

Body:

```json
{
  "name": "SMA Negeri 1 Bandung",
  "company": "SMA Negeri 1 Bandung",
  "email": "humas@example.test",
  "phone": "081234567890",
  "product_id": 1,
  "quantity": 8,
  "subject": "Penawaran snare untuk tim drumband",
  "message": "Kami ingin meminta penawaran untuk 8 unit snare drum sekolah."
}
```

Aturan validasi:

| Field | Wajib | Aturan |
|---|---|---|
| `name` | Ya | string, maksimal 100 karakter |
| `company` | Tidak | string, maksimal 120 karakter |
| `email` | Ya | format email, maksimal 150 karakter |
| `phone` | Ya | maksimal 30 karakter, hanya angka, `+`, `-`, spasi, dan tanda kurung |
| `product_id` | Tidak | ID produk aktif yang tersedia |
| `quantity` | Tidak | integer 1 sampai 10000 |
| `subject` | Ya | string, maksimal 150 karakter |
| `message` | Ya | string 20 sampai 3000 karakter |
| `website` | Tidak | honeypot, jangan diisi pada request normal |

Contoh respons sukses `201`:

```json
{
  "message": "Terima kasih. Tim THORXup akan menghubungi Anda pada jam kerja.",
  "data": {
    "id": 4,
    "name": "SMA Negeri 1 Bandung",
    "company": "SMA Negeri 1 Bandung",
    "email": "humas@example.test",
    "phone": "081234567890",
    "product_id": 1,
    "product": {
      "id": 1,
      "name": "Snare Drum Marching 14 inci",
      "description": "Snare dengan proyeksi tinggi...",
      "benefits": [],
      "details": [],
      "image_url": null,
      "is_featured": true,
      "sort_order": 1
    },
    "quantity": 8,
    "subject": "Penawaran snare untuk tim drumband",
    "message": "Kami ingin meminta penawaran untuk 8 unit snare drum sekolah.",
    "status": "new",
    "status_label": "Baru",
    "created_at": "2026-11-17T02:09:12+00:00"
  }
}
```

Status inquiry yang tersedia:

| Status | Label | Arti |
|---|---|---|
| `new` | Baru | Belum dibaca |
| `read` | Dibaca | Sudah dibuka admin |
| `replied` | Dibalas | Sudah direspons |
| `closed` | Selesai | Tidak perlu tindak lanjut |

Catatan:

- `admin_notes` tidak dikembalikan oleh API publik.
- Endpoint dibatasi **10 request per menit per IP**.
- Field `website` adalah honeypot. Jika diisi, API tetap membalas `201`, tetapi data tidak disimpan.
- Inquiry yang masuk dapat dilihat di panel admin Filament pada menu Inquiries.

---

## 9. Aturan data yang perlu diketahui

### Produk

- Hanya `is_active = true` yang tampil di API.
- Urutan default: `sort_order`, lalu nama.
- `is_featured` menentukan produk unggulan di `/home` dan filter `featured`.
- `benefits` dan `details` disimpan sebagai teks multi-baris, lalu dikembalikan sebagai array.

### Kategori

- Hanya `is_active = true` yang tampil.
- `products_count` hanya menghitung produk aktif.
- Detail kategori nonaktif mengembalikan `404`.

### Berita

- Berita draf adalah berita dengan `published_at = null`.
- Berita dengan tanggal publikasi di masa depan juga belum tampil.
- `excerpt` hanya ada di endpoint daftar; `content` HTML lengkap hanya di endpoint detail.

### Carousel

- Hanya `is_active = true` yang tampil.
- Urutan berdasarkan `sort_order`, lalu `id`.

### Profil

- API mengambil profil pertama dari tabel `profile_brands`.
- `mission` dan `core_values` disimpan sebagai teks multi-baris dan dikembalikan sebagai array.
- Social link dapat diisi username saja atau URL lengkap.

---

## 10. Status code

| Status | Arti | Contoh |
|---|---|---|
| `200` | Berhasil | GET daftar/detail |
| `201` | Berhasil dibuat | POST inquiry |
| `404` | Data tidak ditemukan/nonaktif | Produk nonaktif, berita draf |
| `422` | Validasi gagal | Body inquiry tidak lengkap |
| `429` | Terlalu banyak request | Lebih dari 10 inquiry per menit |
| `500` | Kesalahan server | Database bermasalah, bug aplikasi |

Contoh error `404`:

```json
{
  "message": "Not Found"
}
```

Contoh error `429`:

```json
{
  "message": "Too Many Requests"
}
```

---

## 11. Cara pengujian di Postman

### 11.1 Persiapan

1. Pastikan server berjalan:

   ```sh
   php artisan serve
   ```

2. Import collection:

   - Buka Postman.
   - Klik **Import**.
   - Pilih file `docs/thorxup-api.postman_collection.json`.
   - Klik **Import**.

3. Buka collection **THORXup API v1**.

4. Buka tab **Variables** pada collection, lalu pastikan:

   | Variable | Value |
   |---|---|
   | `base_url` | `http://127.0.0.1:8000/api/v1` |
   | `product_id` | `1` |
   | `category_id` | `1` |
   | `news_id` | `1` |

5. Jika ID data berbeda, ambil ID terbaru dari endpoint kategori/produk/berita terlebih dahulu.

### 11.2 Contoh isian request di Postman

| Nama request | Method | URL | Body |
|---|---|---|---|
| Health | GET | `{{base_url}}/health` | - |
| Home | GET | `{{base_url}}/home` | - |
| Profile | GET | `{{base_url}}/profile` | - |
| Carousels | GET | `{{base_url}}/carousels` | - |
| Categories | GET | `{{base_url}}/categories` | - |
| Category detail | GET | `{{base_url}}/categories/{{category_id}}` | - |
| Products | GET | `{{base_url}}/products?per_page=6` | - |
| Product filter | GET | `{{base_url}}/products?q=snare&category={{category_id}}&featured=true&per_page=6` | - |
| Product detail | GET | `{{base_url}}/products/{{product_id}}` | - |
| News | GET | `{{base_url}}/news?per_page=6` | - |
| News detail | GET | `{{base_url}}/news/{{news_id}}` | - |
| Create inquiry | POST | `{{base_url}}/inquiries` | JSON di bawah |
| Validasi inquiry | POST | `{{base_url}}/inquiries` | `{}` |

### 11.3 Test health

Request:

```http
GET {{base_url}}/health
```

Header:

```http
Accept: application/json
```

Expected:

```json
{
  "status": "ok",
  "service": "THORXup API",
  "version": "v1",
  "timestamp": "2026-11-17T02:02:41+00:00"
}
```

Status: `200`.

### 11.4 Test home

Request:

```http
GET {{base_url}}/home
```

Cek bahwa respons memiliki:

```text
data.profile
data.carousels
data.categories
data.featured_products
data.latest_news
data.stats
```

Status: `200`.

### 11.5 Test kategori

Request:

```http
GET {{base_url}}/categories
```

Ambil salah satu `id` dari respons, misalnya `1`, lalu ubah variable `category_id` di Postman menjadi `1`.

Test detail:

```http
GET {{base_url}}/categories/{{category_id}}
```

Expected: `200` dan `data.name = "Snare Drum"` untuk data seeder.

### 11.6 Test produk

Daftar produk:

```http
GET {{base_url}}/products?per_page=6
```

Ambil `id` produk pertama, misalnya `1`, lalu set variable `product_id = 1`.

Detail produk:

```http
GET {{base_url}}/products/{{product_id}}
```

Test filter:

```http
GET {{base_url}}/products?q=snare&category=1&featured=true&sort=name&per_page=6
```

Expected:

- Hanya produk aktif.
- `data` berisi produk yang namanya mengandung `snare`.
- `meta.per_page` bernilai `6`.

Test pagination:

```http
GET {{base_url}}/products?per_page=2&page=2
```

Expected: `meta.current_page = 2`.

### 11.7 Test berita

Daftar berita:

```http
GET {{base_url}}/news?per_page=6
```

Ambil `id` berita pertama, misalnya `1`, lalu set variable `news_id = 1`.

Detail berita:

```http
GET {{base_url}}/news/{{news_id}}
```

Expected: `200` dan ada field `data.content`.

Test berita draf:

```http
GET {{base_url}}/news/5
```

Expected: `404` jika `id = 5` masih berstatus draf.

### 11.8 Test create inquiry

Method: `POST`

URL:

```text
{{base_url}}/inquiries
```

Headers:

```http
Accept: application/json
Content-Type: application/json
```

Body → pilih **raw** → **JSON**:

```json
{
  "name": "SMA Negeri 1 Bandung",
  "company": "SMA Negeri 1 Bandung",
  "email": "humas@example.test",
  "phone": "081234567890",
  "product_id": 1,
  "quantity": 8,
  "subject": "Penawaran snare untuk tim drumband",
  "message": "Kami ingin meminta penawaran untuk 8 unit snare drum sekolah."
}
```

Expected status: `201`.

Expected body (diringkas):

```json
{
  "message": "Terima kasih. Tim THORXup akan menghubungi Anda pada jam kerja.",
  "data": {
    "id": 4,
    "name": "SMA Negeri 1 Bandung",
    "email": "humas@example.test",
    "status": "new",
    "status_label": "Baru"
  }
}
```

Cek data masuk ke database:

```sh
php artisan tinker --execute="dump(App\Models\Inquiry::query()->latest('id')->first(['id','name','email','status'])?->toArray());"
```

Atau buka panel admin:

```text
http://127.0.0.1:8000/admin
```

Login:

```text
Email: admin@thorxup.id
Password: password
```

### 11.9 Test validasi inquiry

Method: `POST`

URL:

```text
{{base_url}}/inquiries
```

Body:

```json
{}
```

Expected status: `422`.

Expected body:

```json
{
  "message": "Nama dan instansi wajib diisi. (and 4 more errors)",
  "errors": {
    "name": ["Nama dan instansi wajib diisi."],
    "email": ["Email wajib diisi."],
    "phone": ["Nomor telepon atau WhatsApp wajib diisi."],
    "subject": ["Topik pesan wajib diisi."],
    "message": ["Pesan wajib diisi."]
  }
}
```

Contoh body dengan format salah:

```json
{
  "name": "Test",
  "email": "bukan-email",
  "phone": "abc",
  "subject": "Test",
  "message": "pendek"
}
```

Expected: `422` dengan error pada `email`, `phone`, dan `message`.

### 11.10 Test honeypot

Kirim body normal, lalu tambahkan field `website`:

```json
{
  "name": "Bot",
  "email": "bot@example.test",
  "phone": "081234567890",
  "subject": "Spam",
  "message": "Pesan spam yang cukup panjang untuk lolos validasi.",
  "website": "https://spam.example"
}
```

Expected:

- Status `201`.
- `data` bernilai `null`.
- Tidak ada row baru di tabel `inquiries`.

### 11.11 Test rate limit

Endpoint inquiry dibatasi 10 request per menit per IP.

Untuk menguji:

1. Kirim `POST /inquiries` lebih dari 10 kali dalam satu menit.
2. Request ke-11 dan seterusnya akan menghasilkan `429`.

Jika terkena limit saat pengujian, tunggu sekitar satu menit atau bersihkan cache rate limiter:

```sh
php artisan cache:clear
```

### 11.12 Cek data inquiry

Semua inquiry yang valid dapat dilihat melalui:

```text
GET /admin/inquiries
```

Atau melalui database:

```sh
php artisan tinker --execute="dump(App\Models\Inquiry::query()->latest()->take(5)->get(['id','name','email','subject','status'])->toArray());"
```

---

## 12. Contoh cURL

Jika tidak menggunakan Postman, endpoint juga bisa diuji dengan cURL.

Health:

```sh
curl -s -H "Accept: application/json" \
  http://127.0.0.1:8000/api/v1/health
```

Daftar produk:

```sh
curl -s -H "Accept: application/json" \
  "http://127.0.0.1:8000/api/v1/products?per_page=6"
```

Detail produk:

```sh
curl -s -H "Accept: application/json" \
  http://127.0.0.1:8000/api/v1/products/1
```

Create inquiry:

```sh
curl -s -X POST \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "name": "SMA Negeri 1 Bandung",
    "email": "humas@example.test",
    "phone": "081234567890",
    "product_id": 1,
    "quantity": 8,
    "subject": "Penawaran snare",
    "message": "Kami ingin meminta penawaran untuk 8 unit snare drum sekolah."
  }' \
  http://127.0.0.1:8000/api/v1/inquiries
```

---

## 13. Automated test

Test API tersedia di:

```text
tests/Feature/Api/V1/PublicApiTest.php
```

Jalankan semua test:

```sh
composer test
```

Atau hanya test API:

```sh
php artisan test tests/Feature/Api/V1/PublicApiTest.php
```

Test yang dicakup:

- Payload home.
- Filter dan pagination produk.
- Produk nonaktif menghasilkan `404`.
- Jumlah produk per kategori.
- Berita draf tidak tampil.
- Penyimpanan inquiry valid.
- Validasi inquiry.
- Honeypot tidak menyimpan data.

Contoh hasil:

```text
Tests: 13 passed (62 assertions)
```

---

## 14. Troubleshooting

### Route API 404 setelah menambah/mengubah route

```sh
php artisan route:clear
php artisan optimize:clear
```

Cek route:

```sh
php artisan route:list --path=api/v1
```

### Error 500

Lihat log:

```text
storage/logs/laravel.log
```

Bersihkan cache konfigurasi:

```sh
php artisan optimize:clear
```

### Validasi tidak mengembalikan JSON

Pastikan header berikut ada:

```http
Accept: application/json
```

### Database tidak terkoneksi

Cek `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projects_maganghub_db
DB_USERNAME=root
DB_PASSWORD=
```

Pastikan MySQL berjalan dan database sudah dibuat.

### `migrate:fresh` gagal

Pastikan database tujuan ada dan kredensial benar. Untuk SQLite, pastikan file database tersedia:

```sh
touch database/database.sqlite
```

### Gambar tidak muncul / `image_url` null

`image_url` bernilai `null` jika kolom `image` kosong. Jika gambar diunggah ke disk `public`, pastikan symbolic link sudah dibuat:

```sh
php artisan storage:link
```

### Limit 429 saat testing

Tunggu satu menit, atau bersihkan cache:

```sh
php artisan cache:clear
```

---

## 15. Catatan production

Sebelum deploy:

- Ganti data demo pada `ProfileBrandSeeder` dan `InquirySeeder`.
- Set `APP_ENV=production` dan `APP_DEBUG=false`.
- Set `APP_URL` sesuai domain production.
- Gunakan kredensial database production.
- Jalankan:

  ```sh
  php artisan migrate --force
  php artisan optimize
  ```

- Pastikan CORS di `config/cors.php` dibatasi ke origin frontend yang sebenarnya, bukan `*`, jika API tidak dimaksudkan untuk publik luas.
- Hapus atau batasi akses data demo.
- Ganti password admin default.
