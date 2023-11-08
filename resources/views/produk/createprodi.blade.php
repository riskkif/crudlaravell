@extends('layoutadmin.main')
@section('content')
    <h2>form mahasiswa</h2>
    <form action="/prodi/store" method="POST">
    {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">KODE</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA PRODI</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        
        <a href="/prodi" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    @endsection