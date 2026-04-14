# Log Pembelajaran & Progress CodeIgniter 4
**Project Area:** `/home/k-artya/Destop/Web_Lanjut`

---

## 1. Materi: Instalasi CodeIgniter 4
**Status:** ✅ Selesai

**Detail Pengerjaan:**
- Setup environment server (XAMPP, PHP 8.1+) dan instalasi Composer telah siap.
- Instalasi _base project_ CodeIgniter 4 menggunakan command: 
  ```bash
  composer create-project codeigniter4/appstarter Web_Lanjut
  ```
- Folder dependencies `vendor` berhasil dibentuk kembali secara sempurna menggunakan perintah `composer install`.
- Konfigurasi `CI_ENVIRONMENT` di dalam file `.env` sudah diaktifkan ke mode `development` guna mempermudah *debugging* bila terjadi _error_.
- Server bawaan siap dihidupkan melalui `php spark serve`.

---

## 2. Materi: Routes & Controllers
**Status:** ✅ Selesai

**Detail Pengerjaan:**
- **Pembuatan View Dasar:**
  - `app/Views/v_home.php` (Memuat tautan link ke halaman Produk dan Keranjang)
  - `app/Views/v_produk.php` (Teks sederhana penanda halaman produk)
  - `app/Views/v_keranjang.php` (Teks sederhana penanda halaman keranjang)
- **Konfigurasi Controller:**
  - Memodifikasi `app/Controllers/Home.php` untuk menampilkan halaman muka ke `v_home.php`.
  - Menerbitkan `ProdukController.php` untuk menangkap _request_ akses produk.
  - Menerbitkan `TransaksiController.php` untuk menangani bagian *keranjang* transaksi.
- **Registrasi Rute (Routing):**
  - Mendaftarkan rute tipe `GET` pada `app/Config/Routes.php`:
    ```php
    $routes->get('/produk', 'ProdukController::index');
    $routes->get('/keranjang', 'TransaksiController::index');
    ```
- Semua fungsi MVC pada tahap fundamental (Tanpa DB) untuk rute dasar sudah beroperasi.

---

## 3. Materi: Layout (Menunggu)
**Status:** ⏳ Belum Dimulai

**Target Selanjutnya:** 
- Membuat hierarki _View Template_ (`$this->extend()` dan `$this->section()`).
- Mengubah View terpisah (`v_home`, `v_produk`, `v_keranjang`) sehingga mengikuti satu *base file layout* HTML/CSS secara terpusat.

---

## 4. Materi: Session (Menunggu)
**Status:** ⏳ Belum Dimulai

---

## 5. Materi: Filter (Menunggu)
**Status:** ⏳ Belum Dimulai

---
_Catatan: File log ini berjalan secara beriringan dengan materi Notion yang sedang diikuti._
