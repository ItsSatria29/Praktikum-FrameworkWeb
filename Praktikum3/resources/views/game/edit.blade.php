@extends('layout')

@section('content')
    <h1 class="mb-4">Edit Game</h1>

    <form action="{{ route('game.update', $game->id) }}" method="POST" class="card p-4 shadow">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" value="{{ $game->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Platform</label>
            <input type="text" name="platform" value="{{ $game->platform }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" value="{{ $game->genre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Rilis</label>
            <input type="number" name="release_year" value="{{ $game->release_year }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('game.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
