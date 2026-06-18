README - Gantikan Logo

Letakkan imej logo sebenar di dalam folder ini menggunakan nama fail tepat seperti di bawah supaya halaman akan memaparkan logo automatik.

Nama fail yang digunakan dalam projek:
- kastam-diraja-malaysia-seeklogo.png
- logo_mypetroleum-removebg-preview.png

Saiz dan format disyorkan:
- `kastam-diraja-malaysia-seeklogo.png`: PNG, lebar ~180-220px, ketinggian ~40-60px (atau padankan nisbah asal)
- `logo_mypetroleum-removebg-preview.png`: PNG (boleh jadi transparent), lebar ~200-300px, ketinggian ~40-80px

Cara gantikan (Windows):
1. Salin fail gambar anda ke `public/images/`
2. Namakan semula kepada salah satu nama di atas, contohnya:

   Rename-Item -Path "C:\path\to\your\file.png" -NewName "logo_mypetroleum-removebg-preview.png"

Cara gantikan (Linux/macOS):
1. Salin dan tukar nama:

   cp /path/to/your/logo.png public/images/logo_mypetroleum-removebg-preview.png

Nota: Jika anda ingin guna nama lain, kemas kini rujukan imej di `resources/views/welcome.blade.php` dan halaman lain.
