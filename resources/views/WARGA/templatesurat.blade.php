@extends('layouts_warga.app')
@section('content')

      <div class="body">
        <ul class="nav nav-tabs3 white">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tambah-surat"><h1>DAFTAR SURAT</h1></a></li>
        </ul>
                <div class="card">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>tanggal</th>
                                                <th>Nama surat</th>
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