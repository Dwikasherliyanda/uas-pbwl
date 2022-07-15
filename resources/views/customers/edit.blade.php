@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color:#ff3385;">
        @foreach ($data as $cust)
        <form method="post" action="{{ url('customers/update/') }}/{{ $cust->id_cust }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Customers</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Customers" name="nama_cust" value="{{ $cust->nama_cust }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Paket Dekorasi</label>
                <div class="col-sm-8">
                    <select name="decor_cust" class="form-select">
                        <option value="{{ $cust->decor_cust  }}">{{ $cust->nama_decor  }}</option>
                        @foreach ($decors as $decor)
                        <option value="{{ $decor->id_decor }}">{{ $decor->nama_decor }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Lokasi" name="lok_cust" value="{{ $cust->lok_cust  }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan Perubahan</button>
        </form>
        @endforeach
    </div>

</div>
@endsection