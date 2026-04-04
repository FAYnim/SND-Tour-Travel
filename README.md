<!-- prettier-ignore -->
<div align="center">

<img src="./images/logo.svg" alt="Logo SnD Tour Travel" align="center" height="80" />

# SnD Tour Travel — Liburan Pasti Berangkat

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)](#)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white)](#)

[Gambaran Umum](#gambaran-umum) • [Fitur](#fitur) • [Mulai Menggunakan](#mulai-menggunakan) • [Struktur Proyek](#struktur-proyek)

</div>

Repositori ini berisi kode sumber untuk aplikasi web **SnD Tour Travel**. SnD Tour Travel adalah agen perjalanan terpercaya yang berbasis di Surabaya, Indonesia, beroperasi sejak tahun 2017. Platform ini menyediakan cara yang mudah bagi pelanggan untuk menjelajahi, menyesuaikan, dan memesan paket wisata domestik dan internasional (Asia), aktivitas outbond, dan layanan catering.

> [!TIP]
> Ini adalah aplikasi web PHP & MySQL yang sederhana. Anda dapat dengan mudah menjalankannya secara lokal menggunakan stack AMP standar seperti XAMPP, MAMP, atau LAMP.

## Gambaran Umum

Membangun situs web agen perjalanan yang cepat, andal, dan ramah pengguna sangat penting untuk menjangkau pelanggan secara efektif. Aplikasi ini berfungsi sebagai etalase utama dan CRM untuk SnD Tour Travel, menawarkan informasi terperinci tentang paket wisata (destinasi, harga, rencana perjalanan), profil perusahaan, artikel blog untuk inspirasi perjalanan, dan jalur kontak langsung.

Aplikasi ini memanfaatkan antarmuka frontend yang responsif dengan HTML/CSS yang rapi dan backend yang ditenagai oleh PHP serta database MySQL (`web_crm_travel`) untuk mengelola paket, blog, dan konten dinamis lainnya.

## Fitur

- **Paket Wisata Dinamis**: Telusuri berbagai kategori termasuk Domestik, Asia, Outbond, dan Liburan Spesial (Idul Fitri, Natal, Tahun Baru).
- **Layanan Tambahan**: Halaman detail untuk aktivitas Outbond dan layanan Catering.
- **Blog & Inspirasi**: Mesin blog bawaan untuk berbagi tips perjalanan, destinasi tersembunyi, dan panduan wisata.
- **Testimoni & Galeri**: Menampilkan pengalaman klien sebelumnya dan galeri destinasi yang indah.
- **Dasbor Admin**: Area backend yang aman (`/admin`) bagi staf untuk mengelola paket wisata, konten, dan pertanyaan pelanggan.
- **Optimalisasi SEO**: Termasuk data terstruktur Schema.org, tag meta, dan HTML semantik untuk visibilitas mesin pencari yang lebih baik.

## Mulai Menggunakan

Anda dapat menjalankan proyek ini secara lokal untuk tujuan pengembangan atau pengujian. Ikuti langkah-langkah ini untuk mengatur lingkungan lokal Anda.

### Prasyarat

Anda harus menginstal alat-alat berikut di perangkat lokal Anda:

- PHP (disarankan versi 7.4 atau 8.x)
- Server Database MySQL
- Server web seperti Apache atau Nginx (dapat diinstal melalui [XAMPP](https://www.apachefriends.org/index.html) atau [MAMP](https://www.mamp.info/))

### Instalasi

1. **Klon repositori** ke document root server web Anda (misalnya, `htdocs` untuk XAMPP atau `www` untuk MAMP):
   ```bash
   git clone <url-repositori> snd-tour
   ```

2. **Arahkan** ke direktori proyek:
   ```bash
   cd snd-tour
   ```

3. **Pengaturan Database**:
   - Buka klien MySQL Anda (misalnya, phpMyAdmin).
   - Buat database baru bernama `web_crm_travel`.
   - Impor file dump SQL yang disediakan (jika tersedia di repositori atau dari cadangan database) untuk menyiapkan tabel dan data awal.

4. **Konfigurasi**:
   - Buka file `config.php` di direktori root.
   - Perbarui variabel koneksi database agar sesuai dengan kredensial MySQL lokal Anda:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root'); // Username MySQL Anda
     define('DB_PASS', '');     // Password MySQL Anda
     define('DB_NAME', 'web_crm_travel');
     ```

5. **Jalankan Aplikasi**:
   - Buka browser web Anda dan arahkan ke `http://localhost/snd-tour` (sesuaikan URL tergantung pada konfigurasi server web Anda).

## Struktur Proyek

Berikut adalah gambaran singkat tentang direktori dan file utama dalam proyek ini:

- `/admin` - Dasbor administratif backend untuk staf.
- `/css` & `/js` - File stylesheet dan JavaScript untuk antarmuka pengguna (frontend).
- `/images` - Gambar statis, ikon, dan logo.
- `index.php` - Halaman utama (landing page).
- `config.php` - Konfigurasi koneksi database.
- `paket-wisata.php`, `detail-paket.php` - Halaman untuk menelusuri dan melihat detail paket wisata.
- `blog.php`, `blog-detail.php` - Halaman blog dan artikel perjalanan.
- `outbond.php`, `catering.php` - Halaman penawaran layanan khusus.

## Bantuan

> [!NOTE]
> Jika Anda mengalami masalah saat mengatur proyek secara lokal, pastikan ekstensi PHP Anda (seperti `mysqli`) diaktifkan dan nama database di `config.php` sama persis dengan yang Anda buat.

Jika Anda memiliki pertanyaan tentang paket wisata atau ingin memesan perjalanan, Anda dapat menghubungi langsung melalui [Situs Web SnD Tour Travel](https://sndtour.com).