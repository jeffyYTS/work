<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengenai MyPetroleum</title>
    <link rel="stylesheet" href="{{ asset('css/mypetroleum.css') }}">
    <style>body{background:#f7f7f7;font-family:system-ui,Arial,sans-serif}</style>
</head>
<body>
    <header class="mp-header">
        <div class="mp-left">
            <img src="{{ asset('images/kastam-diraja-malaysia-seeklogo.png') }}" alt="Kastam">
            <img src="{{ asset('images/logo_mypetroleum-removebg-preview.png') }}" alt="MyPetroleum">
        </div>
        <nav class="mp-nav">
            <a href="{{ url('/') }}">Utama</a>
            <a href="{{ route('about') }}">Mengenai MyPetroleum</a>
            <a href="{{ route('panduan.58a') }}">Panduan Butiran 58 A</a>
            <a href="{{ route('manual') }}">Manual Pengguna</a>
            <a href="{{ route('contact') }}">Hubungi Kami</a>
            <a href="{{ route('login') }}" class="primary">Daftar Masuk</a>
        </nav>
    </header>

    <main class="mp-container">
        <h1>Mengenai MyPetroleum</h1>
        <p>Halaman ini adalah penerangan ringkas mengenai MyPetroleum. Gantikan kandungan ini dengan teks sebenar.</p>
    </main>
</body>
</html>
