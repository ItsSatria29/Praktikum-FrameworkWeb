<!-- resources/views/tentang.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Saya</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
            text-align: center;
        }
        .box {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 28px;
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
            margin-top: 10px;
        }
        button:hover {
        background-color: #005fa3;
        }
    </style>
</head>
<body>
        <a href="{{ route('home') }}">
    <button style="padding: 10px 20px; margin-top: 20px; background-color: #28a745; color: white; border: none; border-radius: 6px; cursor: pointer;">
        Home
    </button>
    </a>    

    <a href="{{ route('about') }}">
    <button style="padding: 10px 20px; margin-top: 20px; background-color: #0077cc; color: white; border: none; border-radius: 6px; cursor: pointer;">
        About
    </button>
    </a>

    <div class="box">
        <h1>Tentang Saya</h1>
        <p>Halo! Saya Satria Panca Nugoho, seorang mahasiswa yang sedang menempuh jenjang pendidikan S1.</p>
        <p>Saya sedang belajar di Fakultas Ilmu Komputer, Prodi Informatika, Universitas Singapebangsa Karawang.</p>
    </div>
</body>
</html>