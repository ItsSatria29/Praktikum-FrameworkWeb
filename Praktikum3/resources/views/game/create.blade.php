@extends('layout')

@section('content')
    <h1 class="mb-4">Tambah Game Baru</h1>

    <form action="{{ route('game.store') }}" method="POST" class="card p-4 shadow">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Platform</label>
            <input type="text" name="platform" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Rilis</label>
            <input type="number" name="release_year" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('game.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
