@extends ('layoutadmin.main')
@section ('content')
        
                <table class="table table-bordered table-striped" id="example1">
                        <thead>
                                <tr>
                                        <th>KODE</th>
                                        <th>PRODI</th>
                                        <th><a href="/prodi/create" class="btn btn-success">Tambah Data</a></th>
</tr>
</thead>
                        <tbody>
                                @foreach ($dataProdi as $item)
                                <tr>
                                        <td>{{ $item->kd_prodi }}</td>
                                        <td>{{ $item->nama_prodi }}</td>
                                        <td>
                                            <a href="/prodi/edit/{{ $item->kd_prodi }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/prodi/destroy/{{ $item->kd_prodi }}"
                                            class="btn btn-sm btn-warning">Hapus</a>
                                        </td>
</tr>
@endforeach
</tbody>
</table>
@endsection