# Laravel-Exam-Importir
This repository used for Exam Purpose on Company ImportirORG

# Story
Sebagai seorang pengembang web aplikasi, kamu diminta seorang client yang bergerak dalam bidang meetup / gathering utk mengumpulkan data - data peserta yang menghadiri acara tersebut lewat portal halaman dimana pada halaman tersebut berisikan form untuk pengisian data, adapun data diri yang diperlukan client adalah (tanggal acara, jam acara, lokasi acara, email, nama lengkap, usia, profesi, nomor handphone)

# Project Description :
[Laravel 5.4 | Php 7.0.33]

# Setup Project Guidance
Silahkan clone project dan artisan migrate, untuk menjalankan project di local anda Jalankan Seeding.

# Follow Instruction
1. Buatlah sebuah halaman form untuk mengumpulkan data peserta dengan UI UX yang menarik. Form digunakan hanya untuk penyimpanan data peserta (tidak ada action tambahan).
2. Buatlah sebuah relasi antara table peserta dengan table acara dimana relasinya adalah 1 acara dapat memiliki banyak peserta dan 1 peserta dapat menjumpai banyak acara. (Mohon membuat sebuah migrasi table baru untuk mencegah relasi many to many)
3. Berikan validasi validasi berikut untuk form diatas.Semua data wajib diisi kecuali data profesi (optional), pastikan user mengisi nomor handphone dengan angka tanpa simbol dan huruf didalamnya. Pastikan agar email yang diisi untuk masing - masing acara tidak dapat duplicate. Pastikan agar peserta yang mendaftar tidak boleh melebihi jumlah kapasitas peserta yang ada.
4. Setiap validasi diberikan pesan error berupa session
5. Buatlah sebuah halaman yang hanya dapat di akses oleh admin yang telah login untuk dapat melihat list acara dimana pada halaman tersebut admin dapat mencari acara berdasarkan tanggal acara, bulan acara, jumlah peserta.
6. Disetiap list acara admin dapat meng-klik untuk melihat isi detail acara lewat tombol detail.
7. Pada halaman detail acara berisi informasi acara, dan peserta acara yang hadir.
8. Codingan yang dibentuk menggunakan return result status seperti video yang telah ditonton
9. Codingan yang dibuat menggunakan model repository seperti video yang telah ditonton
10. -- Silahkan memberikan fitur tambahan yang kiranya bisa membantu atau mengoptimalkan web aplikasi yang dibuat berdasarkan request client diatas sekreatif mungkin.