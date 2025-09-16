@extends('layout')

@section('content')
    <h1 class="mb-4">Daftar Game Koleksi</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>Platform</th>
                <th>Genre</th>
                <th>Tahun Rilis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $game)
            <tr>
                <td>{{ $game->title }}</td>
                <td>{{ $game->platform }}</td>
                <td>{{ $game->genre }}</td>
                <td>{{ $game->release_year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
