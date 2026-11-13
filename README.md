# Caffee Rumah

Situs katalog sederhana untuk kedai kopi rumahan: beranda, daftar kategori, dan detail produk.
Seluruh menu disimpan di database dan dirender sebagai halaman statis yang ringan.

## Fitur

- Beranda dengan hero, menu unggulan, cerita, dan kontak
- Halaman kategori (`/kategori`) dan kategori per-slug (`/kategori/{slug}`)
- Detail produk (`/produk/{slug}`) dengan tombol pesan WhatsApp
- Data kategori/produk dari SQLite, diisi lewat `CatalogSeeder`
- Tema Tailwind 4 kustom (cream, espresso, mocha, latte, gold)

## Stack

Laravel 13 · PHP 8.3 · Tailwind 4 · Vite 8 · SQLite · PHPUnit 12 · Pint

## Menjalankan

```sh
composer setup
composer dev
```

`composer dev` menjalankan server, queue listener, dan Vite sekaligus. Atau secara manual:

```sh
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

Buka http://localhost:8000. Jika port tersebut dipakai aplikasi lain, gunakan
`php artisan serve --port=8001`.

## Mengubah menu

Edit `database/seeders/CatalogSeeder.php`, lalu jalankan:

```sh
php artisan migrate --seed
```

Harga disimpan sebagai integer rupiah dan diformat lewat `Product::formattedPrice()`.

## Pengujian

```sh
php artisan test          # semua test
vendor/bin/pint --test    # cek gaya kode
composer audit            # cek kerentanan dependency
```

## Checklist produksi

- Salin `.env.example` ke `.env`, isi `APP_KEY`, dan jangan pernah commit `.env`.
- Set `APP_ENV=production`, `APP_DEBUG=false`, dan `APP_URL=https://domain-kamu`.
- Set `SESSION_SECURE_COOKIE=true` dan `SESSION_ENCRYPT=true`.
- Jalankan `npm run build`, lalu `php artisan config:cache route:cache view:cache`.
- Pastikan HTTPS aktif; aplikasi mengirim HSTS saat request sudah HTTPS dan
  menerapkan `Content-Security-Policy` di environment production.
- Ganti detail kontak placeholder (`wa.me/6281234567890`, Jl. Melati No. 12).
