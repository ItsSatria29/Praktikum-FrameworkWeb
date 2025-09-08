<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <div style="margin-bottom: 20px;">
        <a href="/home">Home</a> | <a href="/laravel">Laravel</a>
    </div>

    <img src="{{ asset('images/OIP2.jpeg') }}" alt="Logo Framework" style="max-width: 150px; display: block; margin-bottom: 20px;">

    <h1>Framework Web</h1>
    <p>Framework web adalah kerangka kerja yang membantu developer membangun website atau aplikasi web dengan lebih cepat, 
        terstruktur, dan mudah dipelihara. Ibaratnya seperti pondasi dan peralatan siap pakai, sehingga tidak perlu membuat semuanya dari nol.</p>
    
    <h2>Manfaat Framework Web</h2>
    <ul>
        <li><b>Mempercepat pengembangan</b> — sudah ada fitur dasar seperti routing, autentikasi, dan koneksi database.</li>
        <li><b>Kode lebih terstruktur</b> — mudah dibaca, dipahami, dan dipelihara.</li>
        <li><b>Keamanan lebih baik</b> — banyak framework melindungi dari SQL Injection, XSS, CSRF, dll.</li>
        <li><b>Mendukung kerja tim</b> — standar penulisan kode jelas sehingga memudahkan kolaborasi.</li>
    </ul>

    <h2>Contoh Framework Web Populer</h2>
    <ul>
        <li>Laravel (PHP)</li>
        <li>Django (Python)</li>
        <li>Express.js (Node.js)</li>
        <li>Spring Boot (Java)</li>
        <li>React.js (JavaScript - Frontend)</li>
    </ul>
</body>
</html>