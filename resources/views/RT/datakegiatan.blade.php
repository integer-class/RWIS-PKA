@extends('layouts_rt.app')
@section('content')

      <div class="body">
        <ul class="nav nav-tabs3 white">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tambah-kegiatan"><h1>DAFTAR KEGIATAN</h1></a></li>
        </ul>

        
                <div class="card">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkegiatan">Tambah Kegiatan</button>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Nama Kegiatan</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kegiatan as $data_kegiatan)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data_kegiatan->tanggal}}</td>
                                                <td>{{$data_kegiatan->nama_kegiatan}}</td>
                                                <td>{{ Str::limit($data_kegiatan->deskripsi, 100)}}</td>
                                                
                                                <td>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Detailkegiatan{{$data_kegiatan->id}}">Detail</button>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Editkegiatan{{$data_kegiatan->id}}">Edit</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Hapuskegiatan{{$data_kegiatan->id}}">Hapus</button>
                                                </td>
                                            </tr>

                                            {{-- DETAIL  --}}
                                            <div class="modal fade" id="Detailkegiatan{{$data_kegiatan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Detail {{$data_kegiatan->nama_kegiatan}}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <input type="file" class="dropify" data-default-file="{{asset('images/kegiatan/'.$data_kegiatan->gambar)}}" disabled="disabled">    
                                                                    <h5 class="card-title"><a href="#">{{$data_kegiatan->nama_kegiatan}}</a></h5>
                                                                    <p class="card-text">{{$data_kegiatan->deskripsi}}</p>
                                                                    <p class="card-text"><small class="text-muted">{{$data_kegiatan->tanggal}}</small></p>
                                                                </div>
                                                            </div>   
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit --}}
                                            <div class="modal fade" id="Editkegiatan{{$data_kegiatan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Kegiatan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form method="POST" action="{{route('rt_prosesEditkegiatan')}}" enctype="multipart/form-data" >
                                                         @csrf
                                                         <div class="modal-body">
                                                                <input type="hidden" name="id" value="{{$data_kegiatan->id}}">
                                                                <div class="form-group">
                                                                    <label for="">Nama Kegiatan :</label>
                                                                    <input name="nama_kegiatan" value="{{$data_kegiatan->nama_kegiatan}}" type="text"  class="form-control" placeholder="" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Tanggal :</label>
                                                                    <input name="tanggal" value="{{$data_kegiatan->tanggal}}" type="date"  class="form-control" placeholder="" required>
                                                                </div>
                                                                <label>Deskripsi :</label>
                                                                <div class="form-group c_form_group">
                                                                    <div class="input-group">
                                                                        <textarea name="deskripsi"  class="form-control" aria-label="With textarea">{{$data_kegiatan->deskripsi}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Foto Kegiatan</label>
                                                                    <input type="file" name="image" data-default-file="{{asset('images/kegiatan/'.$data_kegiatan->gambar)}}" class="dropify">
                                                                </div>
                                                               
                                                          </div>
                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary theme-bg gradient">Simpan</button>
                                                          </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                            {{-- HAPUS --}}
                                            <div class="modal fade" id="Hapuskegiatan{{$data_kegiatan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kegiatan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form method="POST" action="{{route('rt_prosesHapuskegiatan')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data_kegiatan->id}}" >
                                                            <div class="modal-body">
                                                                <div class="alert alert-warning" >
                                                                    Apa anda yakin? Data yang dihapus tidak bisa dikembalikan. 
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
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
            </div>
            


    {{-- Tambah Kegiatan --}}
    <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('rt_prosesTambahKegiatan')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kegiatan :</label>
                            <input name="nama_kegiatan" type="text"  class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal :</labe+l>
                            <input name="tanggal" type="date"  class="form-control" placeholder="" required>
                        </div>
                        <label>Deskripsi :</label>
                        <div class="form-group c_form_group">
                            <div class="input-group">
                                <textarea name="deskripsi" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Foto Kegiatan</label>
                            <input type="file" name="image" class="dropify">
                        </div>
                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary theme-bg gradient">Simpan</button>
                </div>
            </form>
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