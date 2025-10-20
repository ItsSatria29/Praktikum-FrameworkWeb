@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div style="color: red; padding: 10px; border: 1px solid red; margin-bottom: 15px;">
            Validasi Gagal! Periksa kembali isian Anda.
        </div>
    @endif
    
    <h1>Welcome to Tambah Buku page</h1>
    <form action="/simpan-buku" method="post">
        @csrf
        <div>
            <label for="judul">Judul</label>
            <input type="text" name="judul" value="{{ old('judul') }}" required>
        </div>
        <div>
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" value="{{ old('pengarang') }}" required>
        </div>
        <div>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit') }}" required>
        </div>
        <div>
            <label for="kategori_buku_id">Kategori Buku</label>
            <select name="kategori_buku_id" required>
                <option value="" disabled selected>-- Pilih Kategori --</option> 
                
                @foreach($kategoriBuku as $kategori)
                    <option value="{{ $kategori->id }}" {{ old('kategori_buku_id') == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection
