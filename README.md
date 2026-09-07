# Repository STIKes Namira Madina — Versi Berfungsi
Aplikasi PHP + SQLite tanpa framework.

## Fitur
- Website repository publik
- Pencarian judul/penulis/kata kunci
- Filter kategori
- Detail dokumen
- Upload PDF dari panel admin
- Metadata: judul, penulis, tahun, kategori, abstrak, kata kunci
- Akses publik/terbatas
- Download/preview PDF
- Hapus dokumen
- Database SQLite otomatis dibuat saat pertama dibuka

## Instalasi XAMPP
1. Ekstrak folder ke `C:\xampp\htdocs\repository`.
2. Pastikan Apache aktif.
3. Buka `http://localhost/repository/`
4. Admin: `http://localhost/repository/admin.php`
5. Login awal: `admin` / `admin123`
6. Setelah masuk, upload PDF dan metadata.

## Catatan keamanan
Untuk penggunaan produksi, ganti password admin, aktifkan HTTPS, batasi ukuran/jenis upload di server, dan tambahkan backup database.
