# Progress CodeIgniter 4
**Project:** `/home/k-artya/Destop/Web_Lanjut`

- [x] **1. Instalasi**
  - Setup CI4 dengan Composer.
  - Set Environment`.env` ke `development`.
  - Menjalankan `php spark serve`.

- [x] **2. Routes & Controllers**
  - Membuat Controller: `Home`, `ProdukController`, `TransaksiController`.
  - Menyiapkan rute `/produk` dan `/keranjang`.

- [x] **3. Layout (NiceAdmin)**
  - Mengunduh & install template *NiceAdmin* ke `public/`.
  - Slicing master HTML ke `layout.php`, `header.php`, `sidebar.php`, `footer.php`.
  - Pasang tata letak (`extend`) ke `v_home`, `v_produk`, dan `v_keranjang`.
  - Judul dinamis otomatis via `uri_string()`.

- [x] **4. Session**
  - Ubah `header.php` ke dinamisasi pengguna `<?= session()->get() ?>`.
  - Pasang Route autentikasi (`login` & `logout`).
  - Slicing `v_login.php` dengan `layout_clear.php`.
  - Buat `AuthController.php` (Flashdata Error & MD5 Session `april`).

- [ ] **5. Filter**
  - *Belum dimulai*
