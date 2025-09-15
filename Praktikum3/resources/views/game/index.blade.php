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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $game)
            <tr>
                <td>{{ $game->title }}</td>
                <td>{{ $game->platform }}</td>
                <td>{{ $game->genre }}</td>
                <td>{{ $game->release_year }}</td>
                <td>
                    <a href="{{ route('game.edit',$game->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('game.destroy',$game->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin mau hapus game ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
