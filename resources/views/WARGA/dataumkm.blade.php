@extends('layouts_warga.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .bg-custom {
            background-image: url('https://assets.website-files.com/60865b2e948bd69b89087ef2/619612f1ca35524bd530953a_BLOG_-_UMKM_Indonesia__Bagaimana_Perkembangannya_[MKT_Marketing_17-11-2021]-01.jpg');
            background-size: cover;
            background-position: center;
            height: 300px; /* Menambah tinggi elemen untuk membuat gambar lebih besar */
        }
        .big-text {
            font-size: 28px; /* Menyesuaikan ukuran teks */
        }
    </style>
    <title>Halaman UMKM Warga</title>
</head>
<body>
    <div class="body">
        <div class="card">
            <div class="card-body bg-custom text-white text-center font-weight-bold">
                <p class="card-text big-text"></p>
                <form class="mx-auto" style="width: 600px;">
                </form>    
            </div>
        </div>
    </div>
</body>

      <div class="body">
        <ul class="nav nav-tabs3 white">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tambah-umkm"><h1>DAFTAR UMKM RW 01</h1></a></li>
        </ul>
                <div class="card">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama umkm</th>
                                                <th>Nama pemilik</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($umkm as $data_umkm)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data_umkm->nama_umkm}}</td>
                                                <td>{{$data_umkm->nama_pemilik}}</td>
                                                <td>{{ Str::limit($data_umkm->deskripsi, 100)}}</td> 
                                                <td> 
                                                    <a href="{{ route('warga_detail_umkm', $data_umkm->id) }}" class="btn btn-primary">Detail</a>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- Button Pagination --}}
                                    <div class="text-center mt-3">
                                        <a href="{{ $umkm->previousPageUrl() }}" class="btn btn-primary {{ $umkm->onFirstPage() ? 'disabled' : '' }}">Previous</a>
                                        <a href="{{ $umkm->nextPageUrl() }}" class="btn btn-primary {{ $umkm->hasMorePages() ? '' : 'disabled' }}">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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