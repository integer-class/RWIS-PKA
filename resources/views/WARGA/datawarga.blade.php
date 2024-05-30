@extends('layouts.app')
@section ('content')
<div class="body">
    <ul class="nav nav-tabs3 white">
        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Data Warga</a></li>
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
                                    @foreach ($datawarga as $penduduk)
                                    <tr>
                                        <td >{{$penduduk->nik}}</td>
                                        <td> {{$penduduk->nama}} </td>
                                        <td> 
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter{{$penduduk->nik}}">Detail</button>
                                        </td>                                        
                                    </tr>  
                                    <div class="modal fade" id="exampleModalCenter{{$penduduk->nik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Data detail dari {{$penduduk->nama}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>NIK</p>
                                                            <p>No.KK</p>
                                                            <p>Nama</p>
                                                            <p>Alamat</p>
                                                            <p>RT</p>
                                                            <p>Agama</p>
                                                            <p>Golongan Darah</p>
                                                            <p>Jenis Kelamin</p>
                                                            <p>Pekerjaan</p>
                                                            <p>Tanggal Lahir</p>
                                                            <p>Status</p>
                                                            <p>Kependudukan</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>:{{$penduduk->nik}}</p>
                                                            <p>:{{$penduduk->no_kk}}</p>
                                                            <p>:{{$penduduk->nama}}</p>
                                                            <p>:{{$penduduk->alamat}}</p>
                                                            <p>:{{$penduduk->rt}}</p>
                                                            <p>:{{$penduduk->agama}}</p>
                                                            <p>:{{$penduduk->golongan_darah}}</p>
                                                            <p>:{{$penduduk->jenis_kelamin}}</p>
                                                            <p>:{{$penduduk->pekerjaan}}</p>
                                                            <p>:{{$penduduk->tanggal_lahir}}</p>
                                                            <p>:{{$penduduk->status}}</p>
                                                            <p>:{{$penduduk->status_kependudukan}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    </div>
</div>
@endsection

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
