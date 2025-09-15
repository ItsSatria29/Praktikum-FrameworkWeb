@extends('layout')

@section('content')
    <h1>Selamat Datang di Aplikasi Game Collection Management🎮</h1>
    <p>Aplikasi ini dibuat dengan Laravel untuk mengelola koleksi game kamu.</p>

    <ul>
        <li><a href="{{ route('game.index') }}">Lihat Daftar Game</a></li>
        <li><a href="{{ route('game.create') }}">Tambah Game Baru</a></li>
    </ul>
@endsection
