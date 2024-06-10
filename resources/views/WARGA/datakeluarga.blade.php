@extends('layouts_warga.app')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}

<div class="body">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Keluarga Page</title>
        <style>
            .card-body {
                background-image: url('https://i.pinimg.com/564x/01/50/7e/01507e8d734cb58f9aa07b22fa1df160.jpg');
                background-size: cover;
                background-position: center;
                padding: 50px; /* Menambahkan padding untuk memperbesar tampilan gambar */
                min-height: 200px; /* Menambahkan tinggi minimum */
            }
    
            .card-text {
                font-size: 1.9rem; /* Ukuran teks yang lebih besar */
            }
        </style>
    </head>
    <body>
        <div class="body">
            <div class="card">
                <div class="card-body text-white text-center font-weight-bold">
                    <p class="card-text big-text">Selamat Datang di halaman Keluarga!</p>   
                </div>
            </div>
        </div>
    </body>
    <div class="tab-content">
        {{-- TAB tabel data warga --}}
        <div class="tab-pane show active" id="Home-new2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor KK</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keluarga as $data_keluarga)
                                    <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td>{{$data_keluarga->no_kk}}</td>
                                        <td>{{$data_keluarga->nik}}</td>
                                        <td>{{$data_keluarga->nama}}</td>                                       
                                    </tr>   
                                    @endforeach                                                                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
