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
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                                </div>
                            </div>
                        </form>                            
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($warga as $penduduk)
                                    <tr>
                                        <td >{{$penduduk->nik}}</td>
                                        <td> {{$penduduk->nama}} </td>
                                        <td> 

                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter{{$penduduk->nik}}">Detail</button>
                                            <button class="btn btn-danger" >Edit</button>
                                            
                                        </td>                                        
                                    </tr>  
                                    <div class="modal fade" id="exampleModalCenter{{$penduduk->nik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle"> data detail dari {{$penduduk->nama}} </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                    
                                                    <p>
                                                        ini diisi nanti
                                                    </p>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary theme-bg gradient">Save changes</button>
                                                </div>
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
        
        {{-- Detail Modals ini basically template boi--}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Cras mattis consectetur orbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary theme-bg gradient">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB Tambah KK --}}
        <div class="tab-pane" id="Profile-new2">
        <form method="post" action="{{route('prosesTambah')}}">
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
                                <label for="">KK:</label>
                                <input name="no_kk" type="text" class="form-control" placeholder="Nomor Kartu Keluarga (KK)" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kecamatan:</label>
                                <input name="kecamatan" type="text" class="form-control" placeholder="Nama Kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <div class="input-group">
                                    <input name="kelurahan" type="date"  class="form-control"  placeholder="Nama Kelurahan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">rt</label>
                                <input name="rt" type="text" class="form-control" placeholder="nomor RT" required>
                            </div>
                        </div>
                        {{-- Kanan atas --}}
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label for="">rw</label>
                                <input name="rw" type="text" class="form-control" placeholder=" nomor RW" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kepala Keluarga</label>
                                <input name="kepala_keluarga" type="text" class="form-control" placeholder="Nama Kepala Keluarga" required>
                            </div>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <input name="provinsi" type="text" class="form-control" placeholder="Nama povinsi" required>
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