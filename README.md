# Webporto Architecture

Dokumentasi resmi untuk instalasi, konfigurasi, dan modifikasi Webporto. Webporto adalah sistem web portofolio personal yang dibangun menggunakan ekosistem Laravel 13 dan arsitektur *zero-database*, dioptimalkan untuk performa tinggi, perawatan minimal, dan antarmuka *high-end minimalist*.

---

## 1. Ringkasan Arsitektur

Webporto dirancang menggunakan pendekatan statis-dinamis (*static-dynamic hybrid*). Seluruh data konten (profil, proyek, riwayat hidup) tidak disimpan di dalam sistem basis data relasional seperti MySQL atau PostgreSQL, melainkan dienkapsulasi di dalam berkas statis berbasis *array* PHP di dalam direktori `app/Data`.

Pendekatan ini memberikan keuntungan:

* **Performa Maksimal:** Eksekusi pemuatan halaman lebih cepat karena tidak ada latensi kueri ke basis data (*zero database latency*).
* **Zero Maintenance:** Tidak memerlukan migrasi basis data, konfigurasi kredensial basis data di peladen produksi, atau pemeliharaan tabel.
* **Keamanan Ekstra:** Mengurangi vektor serangan injeksi SQL karena tidak ada koneksi basis data yang aktif.
* **Styling Zero-Build:** Menggunakan Tailwind CSS versi 4 via *browser build* (CDN) sehingga tidak memerlukan kompilasi Node.js/NPM di peladen.

---

## 2. Fitur Utama

* **Floating Smart Dock Navigation:** Antarmuka navigasi utama menggunakan desain dermaga melayang (*floating dock*) bergaya sistem operasi modern untuk ergonomi dan ruang layar yang optimal.
* **Bento Grid Layout:** Tata letak informasi menggunakan sistem *Bento Box* neumorfik dengan efek *glassmorphism*.
* **Modular Data Providers:** Modifikasi seluruh konten teks, gambar, dan tautan dilakukan secara terpusat melalui *Service Provider*.
* **4 Halaman Modul Utama:** * Beranda (`/`): *Overview* profesional, statistik, dan sorotan proyek.
* Tentang Saya (`/about`): Narasi identitas, visi teknis, dan riwayat pendidikan.
* Pengalaman (`/experience`): Peta kompetensi, dokumentasi karir, dan riwayat organisasi.
* Prestasi & Sertifikasi (`/achievements`): Validasi kompetensi, IPK, dan sertifikat.



---

## 3. Topologi Direktori Penting

Pemahaman struktur direktori berikut mutlak diperlukan sebelum melakukan modifikasi:

```text
webporto/
├── app/
│   ├── Data/                    # Sumber kebenaran tunggal (Single Source of Truth) untuk konten.
│   │   ├── experiences.php      # Data riwayat kerja/organisasi.
│   │   ├── profile.php          # Data identitas utama (nama, email, bio, avatar).
│   │   ├── projects.php         # Data daftar portofolio aplikasi/karya.
│   │   ├── services.php         # Data layanan kompetensi profesional.
│   │   ├── skills.php           # Data keahlian dan ekosistem teknologi.
│   │   └── stats.php            # Data metrik kuantitatif.
│   ├── Http/Controllers/
│   │   └── PortfolioController.php # Pengendali rute dan injeksi data ke View.
│   └── Services/
│       └── PortfolioService.php    # Agregator yang menyatukan seluruh file di app/Data/.
├── public/
│   └── logo.svg                 # Identitas visual dan favicon.
├── resources/
│   └── views/
│       ├── components/
│       │   └── layout.blade.php # Kerangka utama UI, integrasi Tailwind v4, meta SEO.
│       ├── about.blade.php      # Templat halaman Tentang.
│       ├── achievements.blade.php # Templat halaman Prestasi & Sertifikasi.
│       ├── experience.blade.php # Templat halaman Pengalaman.
│       └── home.blade.php       # Templat halaman Beranda.
└── routes/
    └── web.php                  # Registrasi endpoint navigasi.

```

---

## 4. Persyaratan Sistem Lingkungan Luring (*Localhost*)

Sebelum melakukan *cloning* repositori, pastikan mesin pengembangan lokal Anda memenuhi spesifikasi berikut:

* **PHP:** Versi 8.3 atau lebih tinggi.
* **Composer:** Paket manajer untuk instalasi dependensi Laravel.
* **Web Server Lokal:** Laragon, Laravel Herd, XAMPP, Valet, atau integrasi server PHP (*built-in*).
* **Ekstensi PHP:** `ext-sqlite3` (meskipun tidak digunakan untuk tabel data, Laravel tetap membutuhkan *driver* basis data bawaan untuk keperluan *session* dan *cache*).

---

## 5. Prosedur Instalasi Lingkungan Pengembangan

Ikuti urutan perintah eksekusi berikut melalui terminal untuk menjalankan aplikasi secara lokal:

1. **Kloning Repositori:**
```bash
git clone <URL_REPOSITORI_ANDA> webporto
cd webporto

```


2. **Instalasi Dependensi Inti:**
```bash
composer install --optimize-autoloader

```


3. **Inisialisasi Variabel Lingkungan:**
Salin templat konfigurasi dan buat *Application Key* yang valid untuk enkripsi sistem.
```bash
copy .env.example .env
php artisan key:generate

```


4. **Konfigurasi Parameter `.env`:**
Buka file `.env` dan pastikan parameternya terkonfigurasi dengan tepat untuk arsitektur *zero-database*:
```env
APP_NAME=Webporto
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# Konfigurasi Basis Data (Biarkan bawaan SQLite)
DB_CONNECTION=sqlite

# Konfigurasi Driver Penyimpanan Sesi & Memori
BROADCAST_CONNECTION=log
CACHE_STORE=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

```


5. **Validasi Direktori Cache (Khusus Windows):**
Pastikan struktur *cache* internal Laravel tersedia agar tidak terjadi *Internal Server Error*.
```powershell
mkdir storage\framework\views
mkdir storage\framework\cache
mkdir storage\framework\sessions
mkdir storage\framework\testing
mkdir storage\logs

```


6. **Eksekusi Peladen Pengembangan:**
```bash
php artisan serve

```


Akses `http://127.0.0.1:8000` di peramban web Anda.

---

## 6. Prosedur Modifikasi Konten (*Copywriting*)

Webporto memisahkan dengan tegas antara logika antarmuka (*UI Rendering*) dan data (*Content*). Jangan memodifikasi teks panjang langsung di dalam file `.blade.php` apabila teks tersebut dapat dikelola melalui direktori `app/Data`.

### Mengubah Identitas dan Metadata Utama

Modifikasi file `app/Data/profile.php`. Perubahan pada file ini akan secara otomatis memperbarui *header*, *footer*, *meta tags SEO*, *tagline*, dan alamat surel (*email*) di seluruh halaman.

### Mengubah Daftar Portofolio / Proyek

Modifikasi file `app/Data/projects.php`. Setiap elemen *array* mewakili satu kartu proyek.

```php
[
    'title' => 'Nama Aplikasi Anda',
    'category' => 'Web Development',
    'description' => 'Deskripsi teknis mengenai proyek tersebut.',
    'image' => 'URL_GAMBAR_ATAU_ASSET',
    'tags' => ['Laravel', 'Tailwind', 'MySQL'],
    'github' => 'URL_SUMBER_KODE'
],

```

### Mengubah Arsitektur Antarmuka UI (Lanjutan)

Apabila Anda memiliki keahlian dalam rekayasa antarmuka Tailwind CSS, Anda dapat merombak tata letak visual dengan mengedit berkas di dalam `resources/views/`.

Setiap berkas View memanggil data dari Service Provider menggunakan sintaks Blade `$data['kunci']`. Contoh: `$data['profile']['name']`.

---

## 7. Instruksi Penerapan ke Peladen Produksi (*Deployment*)

Sebelum mendorong (*push*) kode sumber ke peladen publik (seperti VPS, cPanel, atau layanan Vercel/Render), perhatikan pedoman keamanan berikut:

1. **Daftar Pengecualian Repositori (.gitignore):**
Pastikan direktori berukuran masif dan file kredensial **tidak masuk** ke dalam repositori GitHub.
```text
/vendor
/node_modules
/public/storage
Homestead.yaml
Homestead.json
.env

```


2. **Konfigurasi Variabel Produksi (.env di Peladen):**
Ubah status aplikasi ke produksi untuk menonaktifkan pelaporan kesalahan terperinci (*stack trace*) yang dapat memicu celah keamanan.
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://domain-profesional-anda.com

```


3. **Optimalisasi Cache Produksi:**
Jalankan perintah berikut di peladen produksi untuk mengkompilasi memori rute, konfigurasi, dan tampilan agar waktu respon aplikasi meningkat drastis.
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache

```



---

## 8. Lisensi Perangkat Lunak

Kode sumber arsitektur ini bersifat terbuka. Anda diizinkan untuk menyalin, memodifikasi, dan menggunakan struktur aplikasi portofolio ini baik untuk keperluan personal maupun komersial dengan mengacu pada ketentuan *Open Source License*.