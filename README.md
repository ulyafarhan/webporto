# Webporto

Portofolio web dinamis berbasis Laravel 13 untuk personal branding, proyek, dan daftar kursus.

## Ringkasan Proyek

Webporto adalah sebuah situs portofolio yang dibangun dengan Laravel 13 dan PHP 8.3. Konten utama diambil dari file PHP statis di `app/Data`, lalu dirender melalui Blade templates di `resources/views`.

Aplikasi ini didesain sebagai portofolio statis-dinamis:
- tidak memerlukan database untuk konten utama,
- konten dapat diubah dengan mengedit file data PHP,
- tidak bergantung pada autentikasi atau panel admin.

## Fitur Utama

- Halaman utama (`/`) dengan layanan, statistik, dan proyek.
- Halaman About, Experience, Course, dan Course Detail.
- Konten dipisahkan dalam file data sehingga mudah diubah.
- Tailwind CSS digunakan langsung melalui browser build.
- `logo.svg` digunakan untuk favicon dan branding.

## Struktur Penting

- `app/Http/Controllers/PortfolioController.php` — controller utama yang memuat data dan menampilkan view.
- `app/Services/PortfolioService.php` — mengambil semua data dari `app/Data`.
- `app/Data/*.php` — semua konten website: profil, skills, services, experiences, stats, projects, curriculum.
- `resources/views/components/layout.blade.php` — layout umum, meta SEO, header, footer, dan akhiran.
- `resources/views/*.blade.php` — halaman utama dan halaman sub.
- `public/logo.svg` — logo situs dan favicon.

## Persiapan untuk Push ke GitHub

1. Pastikan file berikut tidak ikut commit:
   - `vendor/`
   - `storage/`
   - `.env`
   - `node_modules/` jika ada
2. Pastikan `.gitignore` mencakup `vendor`, `storage`, `node_modules`, dan `.env`.
3. Sertakan dokumentasi ini di `README.md`.

## Persyaratan Lokal

- PHP 8.3
- Composer
- Web server lokal (Laragon, XAMPP, Valet, atau built-in PHP server)

## Setup Lokal

1. Clone repo:

```bash
git clone <repo-url> webporto
cd webporto
```

2. Install dependensi PHP:

```bash
composer install
```

3. Siapkan environment file:

```bash
copy .env.example .env
```

4. Buat application key:

```bash
php artisan key:generate
```

5. Pastikan konfigurasi `.env` mencerminkan mode tanpa database untuk portofolio ini:

```env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
# Jika tidak menggunakan database, biarkan nilai DB tetap sqlite tetapi tidak perlu file.

SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

6. Buat direktori penyimpanan Laravel jika belum ada:

```powershell
mkdir storage\framework\views
mkdir storage\framework\cache
mkdir storage\framework\sessions
mkdir storage\framework\testing
mkdir storage\logs
```

7. Jalankan aplikasi lokal:

```bash
php artisan serve
```

Buka `http://127.0.0.1:8000` di browser.

## Jalankan di Development

- `php artisan serve` — menjalankan server lokal.
- `php artisan view:clear` — membersihkan compiled Blade view.
- `php artisan config:clear` — hapus cache konfigurasi.

## Menyiapkan Project untuk Deploy

Karena aplikasi ini tidak membutuhkan database aktif untuk konten, fokus pada:
- Memastikan `storage/framework/*` tersedia dan writable.
- Memastikan `public/logo.svg` ada.
- Memastikan `.env` di lingkungan produksi menggunakan nilai konfigurasi yang sesuai.

Jika deploy ke server produksi, juga tambahkan:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL=https://domain-anda.com`

## Mengubah Copywriting Website

Website ini memuat teks dari dua sumber utama:

1. `app/Data/*.php`
   - `app/Data/profile.php`
   - `app/Data/skills.php`
   - `app/Data/services.php`
   - `app/Data/experiences.php`
   - `app/Data/stats.php`
   - `app/Data/projects.php`
   - `app/Data/curriculum.php`

2. Blade templates di `resources/views`
   - `resources/views/components/layout.blade.php` — meta title, SEO meta, header, footer, tombol, dan teks umum.
   - `resources/views/home.blade.php`
   - `resources/views/about.blade.php`
   - `resources/views/experience.blade.php`
   - `resources/views/course.blade.php`
   - `resources/views/course-detail.blade.php`

### Tutorial Mengubah Copywriting

1. Untuk mengganti teks profil dan ringkasan layanan, buka `app/Data/profile.php` dan `app/Data/services.php`.
2. Untuk mengubah judul, deskripsi sosial, atau footer, edit `resources/views/components/layout.blade.php`.
3. Untuk mengubah teks setiap halaman, edit `resources/views/*.blade.php`.
4. Untuk mengubah daftar proyek, kursus, pengalaman, atau statistik, edit file data yang sesuai di `app/Data/`.

### Jika Ingin Menghapus Copywriting Lama

Jika Anda ingin memulai ulang konten secara bersih, hapus atau kosongkan file berikut:

- `app/Data/profile.php`
- `app/Data/skills.php`
- `app/Data/services.php`
- `app/Data/experiences.php`
- `app/Data/stats.php`
- `app/Data/projects.php`
- `app/Data/curriculum.php`
- `resources/views/home.blade.php`
- `resources/views/about.blade.php`
- `resources/views/experience.blade.php`
- `resources/views/course.blade.php`
- `resources/views/course-detail.blade.php`
- `resources/views/components/layout.blade.php`

Kemudian buat ulang file data dan Blade sesuai struktur yang sama.

> Catatan: Lebih baik edit isi file daripada menghapus seluruh berkas. Hapus hanya jika Anda ingin mengganti struktur halaman sepenuhnya.

## Catatan Teknis

- `app/Services/PortfolioService.php` membaca semua data dengan `require app_path('Data/*.php')`.
- `routes/web.php` mendefinisikan route berikut:
  - `/` → `home`
  - `/about` → `about`
  - `/experience` → `experience`
  - `/course` → `course`
  - `/course/{slug}` → `course.detail`
- View tetap ringan dan tidak memerlukan database karena konten disajikan dari array statis.

## Konten yang Dibersihkan

Proyek sudah dioptimalkan untuk portofolio ringan:
- `database/` telah dihapus,
- `tests/` dan `docs/` telah dihapus,
- autentikasi tidak digunakan,
- `vendor/` tetap ada tetapi tidak perlu dikomit jika membuat repositori open source,
- konfigurasi `.env` disarankan menggunakan file/session/cache/sync.

## Lisensi

Project ini dibangun di atas Laravel dan dapat dilisensikan ulang di bawah [MIT License](https://opensource.org/licenses/MIT).
