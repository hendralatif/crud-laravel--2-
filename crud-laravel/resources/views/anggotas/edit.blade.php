@extends('layout')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Edit Peminjam</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('anggotas.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
        </div>
        <label>Judul Buku</label>
<input type="text" name="judul_buku" class="form-control" value="{{ old('judul_buku', $anggota->judul_buku ?? '') }}" required>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $anggota->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $anggota->telepon }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('anggotas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
