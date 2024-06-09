@extends('layouts.app')
@section ('content')
 {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}

<div class="body">
    <ul class="nav nav-tabs3 white">
        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Data Keluarga</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-new2">Tambah KK</a></li>
       

    </ul>
    <div class="tab-content">
        {{-- TAB tabel data warga --}}
        <div class="tab-pane show active" id="Home-new2">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        {{-- search bar --}}
                        <form method="GET" action="{{route('data_keluarga')}}">
                            <div class="input-group">
                                    <div class="col-md-3">
                                        <div class="input-group mb-3">
                                            <input type="text" name="no_kk" class="form-control" placeholder="Cari Nomor Kk" aria-label="" aria-describedby="basic-addon1">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-outline-secondary" ><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </form>                            
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor KK</th>
                                        <th>Kepala Keluarga</th>
                                        <th>Jumlah Anggota</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($kartukeluarga as $keluarga)
                                    <tr>
                                        <td >{{$keluarga->no_kk}}</td>
                                        <td> {{$keluarga->kepala_keluarga}} </td>
                                        <td>{{$keluarga->citizens_count}}</td>
                                        <td> 

                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter{{$keluarga->no_kk}}">Detail</button>
                                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#edit{{$keluarga->nik}}" >Edit</button>
                                            
                                        </td>                                        
                                    </tr>  
                                    {{-- Detail --}}
                                    <div class="modal fade" id="exampleModalCenter{{$keluarga->no_kk}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle"> Anggota Keluarga {{$keluarga->nama}} </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        @foreach($warga->where('no_kk', $keluarga->no_kk) as $anggota)
                                                            <li>{{ $anggota->nama }} - {{ \Carbon\Carbon::parse($anggota->tanggal_lahir)->age }} tahun - {{$anggota->jenis_kelamin}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                    
                                    {{-- EDIT --}}
                                    <div class="modal fade" id="edit{{$keluarga->nik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle"> data detail dari {{$keluarga->nama}} </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form method="post" action="{{route('prosesEditKK')}}">
                                                        @csrf
                                                        <div class="row clearfix">
                                                            {{-- kiri atas --}}
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Nomor KK:</label>
                                                                    <input name="no_kk" type="text" value="{{$keluarga->no_kk}}" class="form-control" placeholder="Nomor Kartu Keluarga (KK)" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Kecamatan:</label>
                                                                    <input name="kecamatan" value="{{$keluarga->kecamatan}}" type="text" class="form-control" placeholder="Nama Kecamatan" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kelurahan</label>
                                                                    <div class="input-group">
                                                                        <input name="kelurahan" value="{{$keluarga->kelurahan}}" type="text"  class="form-control"  placeholder="Nama Kelurahan" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Provinsi</label>
                                                                    <input name="provinsi" type="text" value="{{$keluarga->provinsi}}" class="form-control" placeholder="Nama povinsi" required>
                                                                </div>
                                                            </div>
                                                            {{-- Kanan atas --}}
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">RW</label>
                                                                    <input name="rw" type="text" value="{{$keluarga->rw}}" class="form-control" placeholder=" nomor RW" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">RT</label>
                                                                    <input name="rt" type="text" value="{{$keluarga->rt}}" class="form-control" placeholder="nomor RT" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Kepala Keluarga</label>
                                                                    <input name="kepala_keluarga" value="{{$keluarga->kepala_keluarga}}" type="text" class="form-control" placeholder="Nama Kepala Keluarga" required>
                                                                </div>
                                                            </div>       
                                                                  
                                                            {{-- Bawah --}}
                                                            <div class="col-lg-12 col-md-12">
                                                                <hr>
                                                                <h6>*Pastikan alamat  sesuai</h6>
                                                                <div class="form-group c_form_group">
                                                                    <label>Alamat</label>
                                                                    <input name="alamat" value="{{$keluarga->alamat}}" type="text" class="form-control" placeholder="alamat lengkap" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                      
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary theme-bg gradient">Save changes</button>
                                                </div>

                                            </form>

                                            </div>
                                        </div>
                                    </div> 
                                    @endforeach                                                                       
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        {{-- TAB Tambah KK --}}
        <div class="tab-pane" id="Profile-new2">
        <form method="post" action="{{route('prosesTambahWarga')}}">
            @csrf
            <div class="card">
                <div class="header">
                    <h2>Pastikan data sesuai dengan Kartu Keluarga</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        {{-- kiri atas --}}
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label for="">Nomor KK:</label>
                                <input name="no_kk" type="text" class="form-control" placeholder="Nomor Kartu Keluarga (KK)" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kecamatan:</label>
                                <input name="kecamatan" type="text" class="form-control" placeholder="Nama Kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <div class="input-group">
                                    <input name="kelurahan" type="text"  class="form-control"  placeholder="Nama Kelurahan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <input name="provinsi" type="text" class="form-control" placeholder="Nama povinsi" required>
                            </div>
                        </div>
                        {{-- Kanan atas --}}
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label for="">RW</label>
                                <input name="rw" type="text" class="form-control" placeholder=" nomor RW" required>
                            </div>
                            <div class="form-group">
                                <label for="">RT</label>
                                <input name="rt" type="text" class="form-control" placeholder="nomor RT" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kepala Keluarga</label>
                                <input name="kepala_keluarga" type="text" class="form-control" placeholder="Nama Kepala Keluarga" required>
                            </div>
                        </div>       
                              
                        {{-- Bawah --}}
                        <div class="col-lg-12 col-md-12">
                            <hr>
                            <h6>*Pastikan alamat  sesuai</h6>
                            <div class="form-group c_form_group">
                                <label>Alamat</label>
                                <input name="alamat" type="text" class="form-control" placeholder="alamat lengkap" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary theme-bg gradient">Simpan</button>
                    
                </div>
            </div>   
        </form>

        </div>
        
        
    </div>
</div>



@endsection

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>