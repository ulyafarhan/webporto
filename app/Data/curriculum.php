<?php

return [
    [
        'slug' => 'instalasi-laravel',
        'topic' => 'Instalasi Laravel',
        'category' => 'Dasar',
        'reading_time' => '5 Menit',
        'description' => 'Panduan lengkap memulai proyek Laravel 13 dari nol menggunakan Composer, konfigurasi environment, dan menjalankan server development.',
        'content' => 'Laravel 13 membutuhkan PHP versi 8.2 atau lebih tinggi, Composer sebagai dependency manager, dan beberapa ekstensi PHP inti seperti OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, dan JSON.

### Mengapa Laravel 13?
Laravel adalah framework PHP modern yang dirancang untuk mempercepat proses pengembangan web dengan menyediakan fitur out-of-the-box seperti routing, autentikasi, session, caching, dan ORM Eloquent.

### Langkah Instalasi
1. **Melalui Composer**: Jalankan perintah berikut untuk membuat proyek baru:
   `composer create-project laravel/laravel nama-proyek`
2. **Melalui Laravel Installer**: Alternatif yang lebih cepat untuk pembuatan berkala:
   `composer global require laravel/installer` kemudian `laravel new nama-proyek`.

### Konfigurasi Environment (`.env`)
Setelah instalasi selesai, file `.env.example` disalin menjadi `.env`. Jalankan perintah `php artisan key:generate` untuk menghasilkan application key unik demi menjaga keamanan enkripsi data pengguna.',
        'status' => 'Selesai',
        'icon' => 'download',
        'pro_tip' => 'Selalu gunakan `.env` untuk menyimpan data sensitif seperti API key dan kredensial database. Jangan pernah memasukkan file `.env` ke dalam version control (Git).',
        'code_filename' => 'Terminal / CMD',
        'code_example' => '# 1. Buka terminal lalu install proyek baru
composer create-project laravel/laravel portofolio-app

# 2. Pindah ke direktori proyek
cd portofolio-app

# 3. Generate key keamanan aplikasi
php artisan key:generate

# 4. Jalankan server lokal development
php artisan serve',
        'details' => ['Persyaratan Sistem PHP 8.2+', 'Composer & Laravel Installer', 'Konfigurasi File .env', 'Struktur Direktori Proyek', 'Artisan Key Generate', 'Server Development']
    ],
    [
        'slug' => 'routing-system',
        'topic' => 'Routing System',
        'category' => 'Routing',
        'reading_time' => '7 Menit',
        'description' => 'Sistem pengalamatan URL yang menentukan bagaimana aplikasi merespons setiap request HTTP dari pengguna.',
        'content' => 'Routing adalah pintu gerbang aplikasi Anda, memetakan URL yang diminta pengguna ke logika controller atau callback tertentu.

### Dasar-Dasar Routing
Di Laravel 13, semua route web didefinisikan di dalam file `routes/web.php`. Route paling sederhana menerima sebuah URI dan closure callback yang mengembalikan respons string atau view.

### Metode HTTP yang Didukung
Laravel mendukung seluruh kata kerja HTTP standar untuk RESTful API:
- `Route::get($uri, $callback)` untuk membaca data.
- `Route::post($uri, $callback)` untuk membuat data baru.
- `Route::put($uri, $callback)` / `Route::patch($uri, $callback)` untuk memperbarui data.
- `Route::delete($uri, $callback)` untuk menghapus data.

### Route Parameters
Anda dapat menangkap segmen URL dengan menggunakan kurung kurawal, misalnya `/user/{id}`. Gunakan tanda tanya (`{name?}`) jika parameter bersifat opsional.',
        'status' => 'Selesai',
        'icon' => 'map',
        'pro_tip' => 'Berikan nama pada setiap route menggunakan `->name()` agar perubahan URI di masa depan tidak merusak tautan (link) yang sudah tersebar di file-file Blade.',
        'code_filename' => 'routes/web.php',
        'code_example' => '<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

// 1. Route Dasar
Route::get(\'/\', [HomeController::class, \'index\'])->name(\'home\');

// 2. Route Parameter Opsional
Route::get(\'/halo/{nama?}\', function ($nama = \'Tamu\') {
    return "Halo, " . e($nama);
})->name(\'sapaan\');

// 3. Route Grouping dengan Middleware
Route::middleware([\'auth\'])->group(function () {
    Route::resource(\'projects\', ProjectController::class);
});',
        'details' => ['GET, POST, PUT, DELETE', 'Route Parameters & Opsional', 'Named Routes', 'Route Grouping & Prefix', 'Route Resource (CRUD)', 'Route Middleware']
    ],
    [
        'slug' => 'models-eloquent',
        'topic' => 'Models & Eloquent ORM',
        'category' => 'Database',
        'reading_time' => '10 Menit',
        'description' => 'Object-Relational Mapping yang merepresentasikan setiap tabel database sebagai class PHP untuk manipulasi data yang intuitif.',
        'content' => 'Eloquent ORM adalah fitur bawaan Laravel yang menyediakan implementasi ActiveRecord yang indah dan sederhana untuk berinteraksi dengan database.

### Konsep Inti Eloquent
Setiap tabel database diasosiasikan dengan sebuah Model PHP. Sebagai contoh, tabel `posts` akan diwakili oleh model `Post` secara otomatis berdasarkan konvensi penamaan jamak/tunggal bahasa Inggris.

### Operasi CRUD Tanpa SQL Manual
Dengan Eloquent, Anda tidak perlu lagi menulis kueri SQL mentah yang rumit. Cukup panggil method bawaan seperti:
- `Post::all()` untuk mengambil semua postingan.
- `Post::find($id)` untuk mendapatkan record spesifik.
- `Post::create($attributes)` untuk membuat baris baru.

### Mass Assignment & Keamanan
Gunakan properti `$fillable` di model Anda untuk mendefinisikan kolom mana saja yang aman diisi secara massal untuk menghindari celah keamanan *Mass Assignment Vulnerability*.',
        'status' => 'Selesai',
        'icon' => 'box',
        'pro_tip' => 'Manfaatkan `findOrFail($id)` alih-alih `find($id)` untuk otomatis memicu halaman error 404 jika data yang dicari tidak ditemukan di database.',
        'code_filename' => 'app/Models/Post.php',
        'code_example' => '<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    // Menentukan kolom yang boleh diisi secara massal
    protected $fillable = [
        \'title\',
        \'slug\',
        \'content\',
        \'status\',
    ];

    // Query Scope untuk memfilter artikel yang sudah terbit
    public function scopePublished($query)
    {
        return $query->where(\'status\', \'published\');
    }
}',
        'details' => ['Konvensi Penamaan Model', 'CRUD dengan Eloquent', 'Query Builder Chaining', 'Mass Assignment & Fillable', 'Soft Deletes', 'findOrFail & firstOrFail']
    ],
    [
        'slug' => 'views-blade',
        'topic' => 'Views & Blade Templating',
        'category' => 'Frontend',
        'reading_time' => '8 Menit',
        'description' => 'Mesin template bawaan Laravel yang memisahkan logika presentasi dari logika bisnis dengan sintaks yang bersih dan powerful.',
        'content' => 'Blade adalah templating engine bawaan Laravel yang sangat efisien. Tidak seperti mesin template PHP lainnya, Blade tidak menghalangi Anda menggunakan kode PHP murni dalam tampilan Anda.

### Sintaks yang Bersih
Gunakan `{{ $variable }}` untuk menampilkan data, di mana Laravel secara otomatis membungkusnya dengan fungsi sanitasi XSS (`htmlspecialchars`) untuk menjaga keamanan web Anda.

### Kontrol Alur yang Kuat
Blade menyediakan sintaks shortcut yang sangat bersih untuk struktur kontrol PHP:
- `@if` ... `@else` ... `@endif` untuk percabangan logis.
- `@foreach` ... `@endforeach` untuk perulangan array/koleksi data.
- `@forelse` ... `@empty` ... `@endforelse` untuk perulangan aman dengan kondisi array kosong.

### Sistem Tata Letak (Layouting)
Anda dapat membagi antarmuka menjadi beberapa bagian modular menggunakan directive `@extends`, `@section`, `@yield`, dan `@include`. Gunakan pula **Blade Components** untuk komponen UI yang modular dan dinamis.',
        'status' => 'Selesai',
        'icon' => 'layout',
        'pro_tip' => 'Di dalam perulangan `@foreach`, gunakan variabel `$loop` yang disediakan Blade secara otomatis untuk mendeteksi indeks iterasi pertama, terakhir, atau nomor urut saat ini.',
        'code_filename' => 'resources/views/posts.blade.php',
        'code_example' => '@extends(\'layouts.app\')

@section(\'content\')
    <h1 class="text-2xl font-bold">Daftar Artikel</h1>

    <div class="grid gap-4 mt-6">
        @forelse($posts as $post)
            <div class="p-5 bg-white border border-slate-100 rounded-xl shadow-sm">
                <h2 class="text-lg font-bold text-slate-800">{{ $post->title }}</h2>
                <p class="text-xs text-slate-500 mt-2">{{ Str::limit($post->content, 120) }}</p>
                <a href="{{ route(\'posts.show\', $post->slug) }}" class="text-teal-600 text-xs font-bold mt-4 inline-block">Baca Selengkapnya</a>
            </div>
        @empty
            <div class="text-center py-10 text-slate-400">Belum ada artikel yang tersedia.</div>
        @endforelse
    </div>
@endsection',
        'details' => ['Sintaks {{ }} & Escaping XSS', 'Directive if, foreach, forelse', 'Variabel $loop', 'Layout: extends, section, yield', 'Blade Components & Slots', 'Include & Each']
    ],
    [
        'slug' => 'controllers',
        'topic' => 'Controllers',
        'category' => 'Dasar',
        'reading_time' => '6 Menit',
        'description' => 'Class yang mengelompokkan logika penanganan request HTTP, menjadi penghubung antara Route, Model, dan View.',
        'content' => 'Controller bertindak sebagai pengatur lalu lintas utama dalam arsitektur MVC (Model-View-Controller) aplikasi Laravel Anda.

### Mengapa Menggunakan Controller?
Alih-alih menuliskan seluruh logika penanganan kueri database dan rendering halaman di dalam penutupan route (`routes/web.php`), Anda memindahkannya ke dalam sebuah Class Controller terpisah untuk menjaga kerapihan struktur kode proyek.

### Resource Controller
Laravel menyediakan opsi otomatis untuk membuat kueri standar CRUD (Create, Read, Update, Delete) hanya dengan satu perintah:
`php artisan make:controller PostController --resource`
Perintah ini akan secara otomatis menghasilkan 7 method standar: `index`, `create`, `store`, `show`, `edit`, `update`, dan `destroy`.

### Dependency Injection
Kontainer Layanan Laravel akan otomatis mendeteksi tipe data parameter (type-hinting) pada method Anda dan menyuntikkan (inject) instance yang sesuai, seperti instance `Request` untuk mengambil inputan form.',
        'status' => 'Selesai',
        'icon' => 'cpu',
        'pro_tip' => 'Gunakan Single Action Controller (Invokable Controller) menggunakan method `__invoke()` jika Controller Anda hanya melayani satu aksi spesifik saja.',
        'code_filename' => 'app/Http/Controllers/PostController.php',
        'code_example' => '<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 1. Tampilkan semua data
    public function index()
    {
        $posts = Post::published()->latest()->get();
        return view(\'posts.index\', compact(\'posts\'));
    }

    // 2. Simpan data baru dari request form
    public function store(Request $request)
    {
        $validated = $request->validate([
            \'title\' => \'required|max:255\',
            \'content\' => \'required\',
        ]);

        Post::create($validated);

        return redirect()->route(\'posts.index\')
            ->with(\'success\', \'Artikel berhasil diterbitkan!\');
    }
}',
        'details' => ['Pembuatan Controller', 'Resource Controller (7 CRUD)', 'Single Action Controller', 'Dependency Injection', 'Middleware di Controller', 'Return View dengan Data']
    ],
    [
        'slug' => 'migration-database',
        'topic' => 'Migration & Database',
        'category' => 'Database',
        'reading_time' => '9 Menit',
        'description' => 'Sistem version control untuk struktur database yang memungkinkan tim bekerja kolaboratif tanpa konflik skema.',
        'content' => 'Migration seperti Git untuk database Anda, memungkinkan tim Anda mendefinisikan, memperbarui, dan membagikan skema tabel database aplikasi secara aman dan terstruktur.

### Alur Kerja Migration
1. **Membuat Migration**: Jalankan perintah `php artisan make:migration create_posts_table`.
2. **Menyusun Skema**: Di dalam method `up()`, rancang kolom tabel menggunakan Schema Builder.
3. **Eksekusi**: Jalankan `php artisan migrate` untuk menerapkan perubahan skema ke database fisik.

### Fitur rollback
Jika terjadi kesalahan desain kolom database, Anda dapat dengan mudah membatalkan migrasi terakhir dengan perintah `php artisan migrate:rollback`.

### Seeders & Factories
Gunakan **Seeders** untuk memasukkan data master awal, dan padukan dengan **Factories** untuk menghasilkan ribuan data simulasi (dummy data) dalam sekejap untuk keperluan pengujian aplikasi.',
        'status' => 'Selesai',
        'icon' => 'database',
        'pro_tip' => 'Perintah `php artisan migrate:fresh` akan menghapus seluruh tabel terlebih dahulu sebelum menjalankan migrasi dari nol. Hati-hati jangan jalankan ini di server production!',
        'code_filename' => 'database/migrations/create_posts_table.php',
        'code_example' => '<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    // Jalankan migrasi pembuatan tabel
    public function up(): void
    {
        Schema::create(\'posts\', function (Blueprint $table) {
            $table->id(); // Primary Key auto-increment
            $table->string(\'title\'); // Kolom VARCHAR
            $table->string(\'slug\')->unique(); // Indeks Unik
            $table->text(\'content\'); // Kolom TEXT
            $table->string(\'status\')->default(\'draft\'); // Default value
            $table->timestamps(); // Menghasilkan created_at & updated_at
        });
    }

    // Batalkan migrasi (rollback)
    public function down(): void
    {
        Schema::dropIfExists(\'posts\');
    }
};',
        'details' => ['Schema Builder & Blueprint', 'Tipe Kolom Lengkap', 'Foreign Key & Constraints', 'Migrate, Rollback, Fresh', 'Database Seeder', 'Factory untuk Data Dummy']
    ],
    [
        'slug' => 'orm-relationships',
        'topic' => 'Eloquent Relationships',
        'category' => 'Database',
        'reading_time' => '11 Menit',
        'description' => 'Sistem relasi antar tabel yang memungkinkan pengambilan data terkait secara otomatis melalui method di Model.',
        'content' => 'Tabel database di dunia nyata hampir selalu terhubung satu sama lain. Eloquent memudahkan pengelolaan dan kueri relasi tabel ini dengan mendefinisikannya sebagai method PHP langsung di dalam Class Model Anda.

### Jenis-Jenis Relasi yang Umum
1. **One to One (Satu ke Satu)**: Seorang Pengguna memiliki satu Profil.
   `$user->hasOne(Profile::class)` dan sebaliknya `$profile->belongsTo(User::class)`.
2. **One to Many (Satu ke Banyak)**: Seorang Penulis memiliki banyak Artikel.
   `$user->hasMany(Post::class)` dan sebaliknya `$post->belongsTo(User::class)`.
3. **Many to Many (Banyak ke Banyak)**: Mahasiswa mengambil banyak Mata Kuliah.
   `$user->belongsToMany(Role::class)` menggunakan tabel perantara (pivot table).

### Masalah N+1 Query & Solusinya
Jika Anda melakukan loop data relasi tanpa penanganan khusus, Laravel akan mengirim kueri terpisah ke database untuk tiap iterasi. Selesaikan masalah performa ini dengan **Eager Loading** menggunakan kueri `with()`.',
        'status' => 'Selesai',
        'icon' => 'link',
        'pro_tip' => 'Selalu gunakan Eager Loading seperti `Post::with(\'user\')->get()` saat menampilkan daftar data yang memuat informasi relasi, agar konsumsi memori dan beban kueri database tetap ringan.',
        'code_filename' => 'app/Models/User.php',
        'code_example' => '<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    // Mendefinisikan bahwa 1 User memiliki Banyak Post (One to Many)
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}

// -------------------------------------------------------------
// Contoh Pemanggilan di Controller dengan Eager Loading:
// $users = User::with(\'posts\')->take(10)->get();',
        'details' => ['One to One (hasOne/belongsTo)', 'One to Many (hasMany)', 'Many to Many & Pivot Table', 'Eager Loading (with)', 'N+1 Query Problem', 'Polymorphic Relations']
    ],
    [
        'slug' => 'blade-templates-advanced',
        'topic' => 'Blade Templates Advanced',
        'category' => 'Frontend',
        'reading_time' => '9 Menit',
        'description' => 'Teknik Blade tingkat lanjut untuk membangun antarmuka yang modular, reusable, dan maintainable pada skala besar.',
        'content' => 'Menguasai fitur-fitur lanjutan Blade memungkinkan Anda membangun antarmuka admin dashboard atau portofolio interaktif yang modular, mudah dipelihara, dan cepat dimodifikasi.

### Class-Based vs Anonymous Components
Anda dapat membuat Blade Components murni berupa file presentasi (.blade.php) atau memadukannya dengan Class PHP pendukung jika memerlukan kalkulasi logika backend sebelum dirender ke HTML.

### Props & Attribute Bag
Kirimkan parameter konfigurasi ke komponen Anda menggunakan `@props`. Dan manfaatkan `{{ $attributes }}` untuk secara fleksibel meneruskan atribut HTML standar tambahan seperti class Tailwind, ID, atau event inline.

### Blade Stacks
Fitur `@stack` dan `@push` sangat membantu untuk menyuntikkan file stylesheet CSS spesifik atau script JavaScript interaktif dari halaman anak ke dalam layout induk secara dinamis.',
        'status' => 'Selesai',
        'icon' => 'layers',
        'pro_tip' => 'Manfaatkan fitur `@class` untuk mempermudah penulisan string class CSS yang dinamis berdasarkan kondisi variabel tertentu tanpa menuliskan ternary PHP yang berantakan.',
        'code_filename' => 'resources/views/components/card.blade.php',
        'code_example' => '@props([\'type\' => \'default\', \'title\'])

<div {{ $attributes->merge([\'class\' => \'p-5 rounded-xl border transition-all duration-300\']) }}>
    <!-- Header Komponen -->
    <div class="flex justify-between items-center mb-3">
        <h3 class="font-bold text-slate-800">{{ $title }}</h3>
        <span @class([
            \'w-2.5 h-2.5 rounded-full\',
            \'bg-teal-500 shadow-teal-500/50 shadow-sm\' => $type === \'success\',
            \'bg-amber-500 shadow-amber-500/50 shadow-sm\' => $type === \'warning\',
            \'bg-slate-400\' => $type === \'default\',
        ])></span>
    </div>
    
    <!-- Tempat Menyisipkan Konten Utama -->
    <div class="text-xs text-slate-500 leading-relaxed">
        {{ $slot }}
    </div>
</div>',
        'details' => ['Class-based & Anonymous Components', 'Props & Attribute Bag', 'Blade Stacks (push/prepend)', 'View Composers', 'Custom Blade Directives', 'Conditional Classes']
    ]
];
