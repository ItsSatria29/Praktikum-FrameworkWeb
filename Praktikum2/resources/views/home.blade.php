<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 650px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 4px solid #ddd;
        }
        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #555;
            margin: 6px 0;
        }
        .section-title {
            margin-top: 30px;
            font-size: 20px;
            font-weight: bold;
            color: #444;
            border-bottom: 2px solid #eee;
            padding-bottom: 8px;
        }
        ul.education {
            list-style: none;
            padding: 0;
            margin-top: 20px;
            text-align: left;
        }
        ul.education li {
            margin-bottom: 12px;
            font-size: 16px;
            color: #333;
        }
        ul.education li strong {
            color: #0077cc;
        }
    </style>
</head>
<body>
    <div style="display: flex; justify-content: center; gap: 20px; margin-top: 30px;">
        <a href="{{ route('home') }}">
            <button style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 6px; cursor: pointer;">
                Home
            </button>
        </a>

        <a href="{{ route('about') }}">
            <button style="padding: 10px 20px; background-color: #0077cc; color: white; border: none; border-radius: 6px; cursor: pointer;">
                About
            </button>
        </a>
    </div>

    <div class="container">
        <h1>Profil Pribadi</h1>
        <img src="{{ asset('images/' . $data['foto']) }}" alt="Foto Profil" class="profile-img">
        <p><strong>Nama:</strong> {{ $data['name'] }}</p>
        <p><strong>Tempat tanggal lahir:</strong> {{ $data['ttl'] }}</p>

        <div class="section-title">Riwayat Pendidikan</div>
        <ul class="education">
            @foreach ($data['pendidikan'] as $edu)
                <li>
                    <strong>{{ $edu['jenjang'] }}:</strong> {{ $edu['nama'] }} ({{ $edu['tahun'] }})
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>