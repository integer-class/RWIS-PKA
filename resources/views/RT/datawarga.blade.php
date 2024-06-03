@extends('layouts.app')
@section ('content')
 {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}

<div class="body">
    <ul class="nav nav-tabs3 white">
        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Data Warga</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-new2">Tambah Warga</a></li>
       

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
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit{{$penduduk->nik}}">Edit</button>

                                            
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

                                                    <div class="Row">
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
                                                            <p>status</p>
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
                                                    <button type="button" class="btn btn-primary theme-bg gradient">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    {{-- Edit --}}
                                    <div class="modal fade" id="edit{{$penduduk->nik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle"> data detail dari {{$penduduk->nama}} </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form method="post" action="{{route('prosesEditWarga')}}">
                                                        @csrf
                                                        <div class="row clearfix">
                                                            {{-- kiri atas --}}
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">NIK:</label>
                                                                    <input name="nik" type="text" value="{{$penduduk->nik}}" class="form-control" placeholder="NIK" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">KK:</label>
                                                                    <input name="no_kk" type="text"  value="{{$penduduk->no_kk}}" class="form-control" placeholder="Nomor KK" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Jenis Kelamin</label>
                                                                    <select  name="jenis_kelamin" class="custom-select" id="inputGroupSelect01" required>
                                                                    <option>Pilih Jenis Kelamin</option>
                                                                    <option value="L" {{$penduduk->jenis_kelamin == 'L' ? 'selected' : ''}}>Laki-Laki</option>
                                                                    <option value="P" {{$penduduk->jenis_kelamin == 'P' ? 'selected' : ''}}>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group  ">
                                                                    <label>Tanggal Lahir</label>
                                                                    <div class="input-group">
                                                                        <input value="{{$penduduk->tanggal_lahir}}" name="tanggal_lahir" type="date"  class="form-control"  placeholder="Pilih tanggal" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Pekerjaan :</label>
                                                                    <input value="{{$penduduk->pekerjaan}}"  name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Status Kependudukan :</label>
                                                                    <select name="status_kependudukan" class="custom-select" id="inputGroupSelect01" required>
                                                                        <option>Pilih Status Kependudukan</option>
                                                                        <option value="Warga Tetap" {{$penduduk->status_kependudukan == 'Warga Tetap' ? 'selected' : ''}}>Warga Tetap</option>
                                                                        <option value="Warga Kontrak" {{$penduduk->status_kependudukan == 'Warga Kontrak' ? 'selected' : ''}}>Warga Kontrak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{-- Kanan atas --}}
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Nama :</label>
                                                                    <input name="nama" value="{{$penduduk->nama}}" type="text" class="form-control" placeholder="Nama" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">agama</label>
                                                                    <select name="agama" class="custom-select" id="inputGroupSelect01" required>
                                                                        <option>Pilih agama</option>
                                                                        <option value="islam" {{$penduduk->agama == 'islam' ? 'selected' : ''}}>Islam</option>
                                                                        <option value="katolik" {{$penduduk->agama == 'katolik' ? 'selected' : ''}}>Katolik</option>
                                                                        <option value="kristen" {{$penduduk->agama == 'kristen' ? 'selected' : ''}}>Kristen</option>
                                                                        <option value="budha" {{$penduduk->agama == 'budha' ? 'selected' : ''}}>Budha</option>
                                                                        <option value="hindu" {{$penduduk->agama == 'hindu' ? 'selected' : ''}}>Hindu</option>
                                                                        <option value="konghucu" {{$penduduk->agama == 'konghucu' ? 'selected' : ''}}>Konghucu</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Golongan Darah</label>
                                                                    <select name="golongan_darah" class="custom-select" id="inputGroupSelect01" required>
                                                                        <option>Pilih Golongan Darah</option>
                                                                        <option value="A" {{$penduduk->golongan_darah == 'A' ? 'selected' : ''}}>A</option>
                                                                        <option value="B" {{$penduduk->golongan_darah == 'B' ? 'selected' : ''}}>B</option>
                                                                        <option value="AB" {{$penduduk->golongan_darah == 'AB' ? 'selected' : ''}}>AB</option>
                                                                        <option value="O" {{$penduduk->golongan_darah == 'O' ? 'selected' : ''}}>O</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">status</label>
                                                                    <select name="status" class="custom-select" id="inputGroupSelect01" required>
                                                                        <option >Pilih Status Perkawinan</option>
                                                                        <option value="Belum Kawin" {{$penduduk->status == 'Belum Kawin' ? 'selected' : ''}}>Belum Kawin</option>
                                                                        <option value="Kawin" {{$penduduk->status == 'Kawin' ? 'selected' : ''}}>Kawin</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">RT</label>
                                                                    <select name="rt" class="custom-select" id="inputGroupSelect01" required>
                                                                        <option >Pilih rt (domisili) </option>
                                                                        <option value="1" {{$penduduk->rt == '1' ? 'selected' : ''}}>1</option>
                                                                        <option value="2" {{$penduduk->rt == '2' ? 'selected' : ''}}>2</option>
                                                                        <option value="3" {{$penduduk->rt == '3' ? 'selected' : ''}}>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>       
                                                                  
                                                            {{-- Bawah --}}
                                                            <div class="col-lg-12 col-md-12">
                                                                <hr>
                                                                <h6>*Pastikan alamat  sesuai</h6>
                                                                <div class="form-group c_form_group">
                                                                    <label>Domisili</label> 
                                                                    <input name="domisili" type="text" value="{{ $penduduk->domisili }}" class="form-control" placeholder="alamat tempat tinggal sekarang" required>
                                                                </div>
                                                                <div class="form-group c_form_group">
                                                                    <label>Alamat asli</label>
                                                                    <input name="alamat_asli" type="text"  value="{{ $penduduk->alamat }}" class="form-control" placeholder="alamat asli sesuai dengan (KTP)" required>
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

        {{-- TAB Tambah warga --}}
        <div class="tab-pane" id="Profile-new2">
        <form method="post" action="{{route('prosesTambahWarga')}}">
            @csrf
            <div class="card">
                <div class="header">
                    <h2>Data diri</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        {{-- kiri atas --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">NIK:</label>
                                <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                            </div>
                            <div class="form-group">
                                <label for="">KK:</label>
                                <input name="no_kk" type="text" class="form-control" placeholder="Nomor KK" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="custom-select" id="inputGroupSelect01" required>
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group  ">
                                <label>Tanggal Lahir</label>
                                <div class="input-group">
                                    <input name="tanggal_lahir" type="date"  class="form-control"  placeholder="Pilih tanggal" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Pekerjaan :</label>
                                <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" required>
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
                                <label for="">agama</label>
                                <select name="agama" class="custom-select" id="inputGroupSelect01" required>
                                    <option>Pilih agama</option>
                                    <option value="islam">islam</option>
                                    <option value="katolik">katolik</option>
                                    <option value="kristen">kristen</option>
                                    <option value="budha">budha</option>
                                    <option value="hindu">hindu</option>
                                    <option value="konghucu">konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Golongan Darah</label>
                                <select name="golongan_darah" class="custom-select" id="inputGroupSelect01" required>
                                    <option>Pilih golongan darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="Ab">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">status</label>
                                <select name="status" class="custom-select" id="inputGroupSelect01" required>
                                    <option >Pilih Status Perkawinan</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">RT</label>
                                <select name="rt" class="custom-select" id="inputGroupSelect01" required>
                                    <option >Pilih rt (domisili) </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
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
                            <div class="form-group c_form_group">
                                <label>Alamat asli</label>
                                <input name="alamat_asli" type="text" class="form-control" placeholder="alamat asli sesuai dengan (KTP)" required>
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