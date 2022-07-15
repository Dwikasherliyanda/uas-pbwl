@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color:#ff3385;">
        <form method="post" action="{{ url('decorations/update/') }}/{{ $data->id_decor }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Paket</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Paket" name="nama_decor" value="{{ $data->nama_decor }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Keterangan" name="ket_decor" value="{{ $data->ket_decor }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Rp." name="harga_decor" value="{{ $data->harga_decor }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan Perubahan</button>
        </form>
    </div>

</div>
@endsection