@extends('layouts.app')
@section('content')

<div class="card">
    <div class="header">
        <div class="text-info">
            <h2>Daftar Kegiatan</h2>
        </div>
    </div>
    <div class="body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkegiatan">Tambah Kegiatan</button>
    </div>
</div>

<div class="card">
    <div class="header">
        <div class="text-info"><h2>List Kegiatan</h2></div>
    </div>
    <div class="body">
        <div class="row">
            @foreach($kegiatan as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/kegiatan/' . $item->foto) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_kegiatan }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <p class="card-text"><small class="text-muted">{{ $item->tanggal }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Tambah Kegiatan --}}
<div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('kegiatan.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kegiatan :</label>
                        <input name="nama_kegiatan" type="text" class="form-control" placeholder="Nama Kegiatan" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal :</label>
                        <input name="tanggal" type="date" class="form-control" placeholder="Tanggal Kegiatan" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi :</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Kegiatan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Kegiatan</label>
                        <input type="file" name="foto" class="dropify" data-default-file="{{ asset('assets/images/kegiatan/default.png') }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary theme-bg gradient">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<!-- Vedor js file and create bundle with grunt  --> 
<script src="assets/vendor/dropify/js/dropify.js"></script>

<!-- Project core js file minify with grunt --> 
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/pages/forms/dropify.js"></script>

@endsection
