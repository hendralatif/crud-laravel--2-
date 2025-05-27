<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $anggota->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Judul Buku</label>
    <input type="judul_buku" name="judul_buku" class="form-control" value="{{ old('judul_buku', $anggota->judul_buku ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required>{{ old('alamat', $anggota->alamat ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Telepon</label>
    <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $anggota->telepon ?? '') }}" required>
</div>
