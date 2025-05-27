@extends('layout')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Daftar Anggota</h4>
        <a href="{{ route('anggotas.create') }}" class="btn btn-success">+ Tambah Peminjam</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggotas as $anggota)
            <tr>
                <td>{{ $loop->iteration + ($anggotas->currentPage() - 1) * $anggotas->perPage() }}</td>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->judul_buku }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>{{ $anggota->telepon }}</td>
                <td>
                    <a href="{{ route('anggotas.edit', $anggota->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('anggotas.destroy', $anggota->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
    {{ $anggotas->links() }}
</div>
</div>
@endsection
