@extends('layoutadmin.main')
@section('content')
    <h2>update mahasiswa</h2>
    <form action="/prodi/update/{{ $dataProdi->kd_prodi }}" method="POST">
        {{ csrf_field() }}
            <input type="hidden" name="kode" value="{{ $dataProdi->kd_prodi }}">
        <div class="mb-3">
            <label class="form-label">KODE</label>
            <input type="text" name="kode" class="form-control" 
            value="{{ $dataProdi->kd_prodi }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control"
            value="{{ $dataProdi->nama_prodi }}" required>
        </div>
        
        <a href="/prodi" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    @endsection