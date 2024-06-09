@extends('layouts_warga.app')
@section('content')

<div class="body">
    <div class="card">
        <div class="col-lg-12">
            <div class="card">
                <div class="header" style="background-image: url('https://i.pinimg.com/564x/5a/90/5a/5a905a87c05d25dbccbaab2263596464.jpg'); background-size: cover; background-position: center; height: 100px; display: flex; justify-content: center; align-items: center;">
                    <h1 style="color: white; font-weight: bold;">DAFTAR SURAT</h1>
                </div>
                <div class="body">
                    <!-- Menambahkan gambar dari direktori -->
                    <div class="image-container" style="text-align: center; margin-bottom: 20px;">
                        <img src="{{ asset('images/alurpersuratan.jpg') }}" alt="Gambar Daftar Surat" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($templatesurat as $data_surat)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data_surat->tanggal}}</td>
                                    <td>{{$data_surat->nama_surat}}</td>
                                    <td>
                                        <form action="{{ route('downloadsurat', $data_surat->id) }}" method="GET" style="display:inline;">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> <span>Download</span></button>
                                        </form>    
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


<!-- Javascript -->

<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<!-- Vedor js file and create bundle with grunt  --> 
<script src="assets/vendor/dropify/js/dropify.js"></script>

<!-- Project core js file minify with grunt --> 
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/pages/forms/dropify.js"></script>

@endsection
