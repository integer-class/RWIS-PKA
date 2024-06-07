@extends('layouts_warga.app')

@section('content')
<div class="card">
    <div class="card-body bg-primary text-white">
        <td>
            <p class="card-text">DETAIL UMKM</small></p>
        </td>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <input type="file" class="dropify" data-default-file="{{asset('images/umkm/'.$umkm->gambar)}}" disabled="disabled">
        <h5 class="card-title"><a href="#">{{$umkm->nama_umkm}}</a></h5>
        <p class="card-text">{{$umkm->deskripsi}}</p>
        <p class="card-text"><small class="text-muted">Nomor telepon :{{$umkm->nomor_telp}}</small></p>
        <p class="card-text"><small class="text-muted">Lokasi :{{$umkm->alamat}}</small></p>
    </div>
</div>

@endsection
