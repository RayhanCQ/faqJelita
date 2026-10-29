# Fitur FAQ JELITA

## 1. Tujuan Fitur

Halaman FAQ membantu pengunjung menemukan informasi tentang JELITA, KRENOVA, inovasi OPD, serta data inovasi Kota Semarang.

## 2. Isi FAQ

Pertanyaan dan jawaban dikelompokkan ke dalam empat topik:

- **Tentang JELITA** — pengertian JELITA, informasi yang tersedia, dan siapa yang dapat mengakses portal.
- **KRENOVA** — pengertian program, peserta, dan informasi jadwal lomba.
- **Inovasi OPD** — alur verifikasi, tahapan inovasi, dan cara menemukan data inovasi.
- **Data dan bantuan** — cakupan data inovasi, pelaporan koreksi data, dan kontak untuk pertanyaan lainnya.

## 3. Cara Menggunakan

Klik pertanyaan untuk membuka atau menutup jawabannya. Untuk bantuan lebih lanjut, pengunjung dapat menghubungi BRIDA Kota Semarang melalui tautan email atau telepon yang tersedia di halaman.

## 4. Cara Kerja Teknis

- Halaman FAQ berada di `faq.php`.
- Interaksi buka-tutup jawaban menggunakan elemen HTML `<details>` dan `<summary>`; tidak memerlukan JavaScript khusus.
- Tampilan dan tata letak halaman diatur dalam `style.css`.
- Header dan footer halaman menggunakan `partials/header.php` dan `partials/footer.php`.

## 5. Cara Menjalankan

Proyek ini memerlukan PHP. Dari direktori proyek, jalankan server pengembangan PHP:

```bash
php -S localhost:8000
```

Kemudian buka `http://localhost:8000/faq.php` di browser.

## 6. Cara Memperbarui Konten

Pertanyaan dan jawaban FAQ ditulis langsung di `faq.php`, di dalam kelompok dengan kelas `faq-group`. Tambahkan atau ubah elemen `<details>` untuk memperbarui pertanyaan dan jawabannya. Jika informasi kontak berubah, perbarui tautan email (`mailto:`), telepon (`tel:`), dan teks kontak yang ditampilkan pada halaman.
