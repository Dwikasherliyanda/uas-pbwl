@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/decorations/create') }}" class="btn btn-success float-end mb-3">Tambah Paket</a>
    <table class="table">
        <thead class="table table-danger">
            <tr class="text-center">
                <th>ID</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($data as $decoration)
            <tr class="text-center">
                <td>{{ $decoration->id_decor }}</td>
                <td>{{ $decoration->nama_decor }}</td>
                <td>Rp. {{ $decoration->harga_decor }}</td>
                <td>{{ $decoration->ket_decor }}</td>
                <td width="100px"><a href="{{ url('decorations/edit') }}/{{ $decoration->id_decor }}" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="{{ url('decorations/destroy') }}/{{ $decoration->id_decor }}" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Paket Ini ?');">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection