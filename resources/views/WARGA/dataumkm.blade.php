@extends('layouts_warga.app')
@section('content')

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
                                                    <td>
                                                        <a href="{{ route('warga_detail_umkm', $data_umkm->id) }}" class="btn btn-primary">Detail</a>
                                                    </td>
                                                </td>
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