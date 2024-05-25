@extends('layouts.app')
@section ('content')
 {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}

 {{-- TOTAL KEUANGAN ATAS --}}
 <div class="col-12">
    <div class="card theme-bg gradient">
        
        <div class="card-body">
            <h4>Total Keuangan RW 01</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                            <div class="ml-4">
                                <span>Iuran sampah</span>
                                <h2 class="mb-0 font-weight-medium">$7,805,109</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                            <div class="ml-4">
                                <span>Iuran Listrik</span>
                                <h2 class="mb-0 font-weight-medium">$7,805,109</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                            <div class="ml-4">
                                <span>Iuran PHB</span>
                                <h2 class="mb-0 font-weight-medium">$7,805,109</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                            <div class="ml-4">
                                <span>Iuran Kematian</span>
                                <h2 class="mb-0 font-weight-medium">$7,805,109</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>
    {{-- Tabel Keuangan --}}
    <div class="card">
        <div class="header">
            
            <h2>Laporan keuangan RW 01</h2>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Tambahkeuangan">Tambah Data Keuangan</button>
                                            

        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_keuangan as $keuangan)
                        <tr>
                            <td>{{$keuangan->tanggal}}</td>
                            <td>{{$keuangan->jenis_data}} </td>
                            <td>{{$keuangan->nama}}</td>
                            <td>{{$keuangan->jumlah}}</td>
                            <td>{{$keuangan->jenis_iuran}}</td>
                            <td> 
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="">Detail</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="">Hapus</button>
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
{{-- Modals Tambah data Keuangan --}}
<div class="modal fade" id="Tambahkeuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {{-- method diisi ya ganteng nanti --}}
                <form method="post" action="">
                    @csrf
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                {{-- kiri atas --}}
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="">NIK:</label>
                                        <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="">Status Kependudukan :</label>
                                        <select name="status_kependudukan" class="custom-select" id="inputGroupSelect01" required>
                                            <option>Pilih Status Kependudukan</option>
                                            <option value="Warga Tetap">Warga Tetap</option>
                                            <option value="Warga Kontrak">Warga Kontrak</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Kanan atas --}}
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">status</label>
                                        <select name="status" class="custom-select" id="inputGroupSelect01" required>
                                            <option >Pilih Status Perkawinan</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Kawin">Kawin</option>    
                                        </select>
                                    </div>
                                </div>       
                                      
                                {{-- Bawah --}}
                                <div class="col-lg-12 col-md-12">
                                    <hr>
                                    <h6>*Pastikan alamat  sesuai</h6>
                                    <div class="form-group c_form_group">
                                        <label>Domisili</label>
                                        <input name="domisili" type="text" class="form-control" placeholder="alamat tempat tinggal sekarang" required>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary theme-bg gradient">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>