@extends('layouts_warga.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Warga</title>
</head>
<body>
    <div class="body">
        <div class="card">
            <div class="card-body text-white text-center font-weight-bold" style="background-image: url('https://assets.pikiran-rakyat.com/crop/296x0:7614x4266/x/photo/2021/09/28/2711211393.jpg'); background-size: cover; background-position: center ;">
                <p class="card-text big-text">Selamat Datang di Halaman Kegiatan Warga!</p>
            </div>
        </div>
    </div>
</body>
<div class="container">
    <div class="card">
        <div class="header">
            <div class="text-info"><h2>List Kegiatan</h2></div>
        </div>
        <div class="body">
            <div class="row">
                @foreach($kegiatan as $data_kegiatan)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="file" class="dropify" data-default-file="{{ asset('images/kegiatan/'.$data_kegiatan->gambar) }}" disabled="disabled">    
                                <h5 class="card-title"><a href="#">{{ $data_kegiatan->nama_kegiatan }}</a></h5>
                                <p class="card-text">{{ $data_kegiatan->deskripsi }}</p>
                                <p class="card-text"><small class="text-muted">{{ $data_kegiatan->tanggal }}</small></p>
                            </div>
                        </div>   
                    </div>
                @endforeach
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
