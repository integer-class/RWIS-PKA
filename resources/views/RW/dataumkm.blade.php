@extends('layouts.app')
@section('content')

      <div class="body">
        <ul class="nav nav-tabs3 white">
            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#DataUmkm">DATA UMKM</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#UmkmBaru">UMKM BARU</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="DataUmkm">
                <div class="card">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahumkm">Tambah umkm</button>
                            </div>
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
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Detailumkm{{$data_umkm->id}}">Detail</button>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Editumkm{{$data_umkm->id}}">Edit</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Hapusumkm{{$data_umkm->id}}">Hapus</button>
                                                </td>
                                            </tr>
    
                                            {{-- DETAIL  --}}
                                            <div class="modal fade" id="Detailumkm{{$data_umkm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Detail {{$data_umkm->nama_umkm}}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <input type="file" class="dropify" data-default-file="{{asset('images/umkm/'.$data_umkm->gambar)}}" disabled="disabled">    
                                                                    <h5 class="card-title"><a href="#">{{$data_umkm->nama_umkm}}</a></h5>
                                                                    <p class="card-text">{{$data_umkm->deskripsi}}</p>
                                                                    <p class="card-text"><small class="text-muted">Nomor telepon :{{$data_umkm->nomor_telp}}</small></p>
                                                                    <p class="card-text"><small class="text-muted">Lokasi :{{$data_umkm->alamat}}</small></p>
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
                                            <div class="modal fade" id="Editumkm{{$data_umkm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit umkm</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form method="POST" action="{{route('prosesEditumkm')}}" enctype="multipart/form-data" >
                                                         @csrf
                                                         <div class="modal-body">
                                                                <input type="hidden" name="id" value="{{$data_umkm->id}}">
                                                                <div class="form-group">
                                                                    <label for="">Nama umkm :</label>
                                                                    <input name="nama_umkm" value="{{$data_umkm->nama_umkm}}" type="text"  class="form-control" placeholder="" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nama pemilik :</label>
                                                                    <input name="nama_pemilik" value="{{$data_umkm->nama_pemilik}}" type="text"  class="form-control" placeholder="" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Lokasi/Alamat :</label>
                                                                    <input name="alamat" value="{{$data_umkm->alamat}}" type="text"  class="form-control" placeholder="" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">nomor Telfon :</label>
                                                                    <input name="no_telp" value="{{$data_umkm->no_telp}}" type="text"  class="form-control" placeholder="" required>
                                                                </div>
                                                                <label>Deskripsi :</label>
                                                                <div class="form-group c_form_group">
                                                                    <div class="input-group">
                                                                        <textarea name="deskripsi"  class="form-control" aria-label="With textarea">{{$data_umkm->deskripsi}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Foto umkm</label>
                                                                    <input type="file" name="image" data-default-file="{{asset('images/umkm/'.$data_umkm->gambar)}}" class="dropify">
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
                                            <div class="modal fade" id="Hapusumkm{{$data_umkm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Hapus umkm</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form method="POST" action="{{route('prosesHapusumkm')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data_umkm->id}}" >
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
                                        
                                        <!-- Pagination Button -->
                                    </table>
                                    <div class="text-center mt-3">
                                        <a href="{{ $umkm->previousPageUrl() }}" class="btn btn-primary {{ $umkm->onFirstPage() ? 'disabled' : '' }}">Previous</a>
                                        <a href="{{ $umkm->nextPageUrl() }}" class="btn btn-primary {{ $umkm->hasMorePages() ? '' : 'disabled' }}">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
             <div class="tab-pane" id="UmkmBaru">
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
                                                <th>Nama umkm</th>
                                                <th>Nama pemilik</th>
                                                <th>Pengupload</th>
                                                <th>Detail</th>
                                                <th>Pilih Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($umkmBaru as $data_umkm)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data_umkm->nama_umkm}}</td>
                                                <td>{{$data_umkm->nama_pemilik}}</td>
                                                <td>{{$data_umkm->nama_pengupload}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#Detailumkm{{$data_umkm->id}}">Lihat</button>
                                
                                                </td>
                                                <td>
                                                        <form method="POST" action="{{route('prosesSimpanumkm')}}">
                                                            @csrf
                                                            <input name="id" type="hidden" value="{{$data_umkm->id}}">
                                                            <button type="submit" class="btn btn-success btn-round" >Terima</button>
                                                            <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#Tolakumkm{{$data_umkm->id}}">Tolak</button>
                                                        </form>
                                                        
                                                </td>
                                            </tr>
                                            {{-- DETAIL  --}}
                                            <div class="modal fade" id="Detailumkm{{$data_umkm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Detail {{$data_umkm->nama_umkm}}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <input type="file" class="dropify" data-default-file="{{asset('images/umkm/'.$data_umkm->gambar)}}" disabled="disabled">    
                                                                    <h5 class="card-title"><a href="#">{{$data_umkm->nama_umkm}}</a></h5>
                                                                    <p class="card-text">{{$data_umkm->deskripsi}}</p>
                                                                    <p class="card-text"><small class="text-muted">Nomor telepon :{{$data_umkm->nomor_telp}}</small></p>
                                                                    <p class="card-text"><small class="text-muted">Lokasi :{{$data_umkm->alamat}}</small></p>
    
                                                                </div>
                                                            </div>   
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Tolak --}}
                                            <div class="modal fade" id="Tolakumkm{{$data_umkm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Hapus umkm</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form method="POST" action="{{route('prosesHapusumkm')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data_umkm->id}}" >
                                                            <div class="modal-body">
                                                                <div class="alert alert-warning" >
                                                                    Apa anda yakin? Data yang ditolak tidak akan masuk daftar umkm. 
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
                                        
                                        <!-- Pagination Button -->
                                    </table>
                                    <div class="text-center mt-3">
                                        <a href="{{ $umkmBaru->previousPageUrl() }}" class="btn btn-primary {{ $umkmBaru->onFirstPage() ? 'disabled' : '' }}">Previous</a>
                                        <a href="{{ $umkmBaru->nextPageUrl() }}" class="btn btn-primary {{ $umkmBaru->hasMorePages() ? '' : 'disabled' }}">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
      </div>
            

    {{-- Tambah umkm --}}
    <div class="modal fade" id="tambahumkm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah umkm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('prosesTambahumkm')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="">Nama umkm :</label>
                            <input name="nama_umkm" type="text"  class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">nama pemilik :</label>
                            <input name="nama_pemilik" type="text"  class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi/Alamat :</label>
                            <input name="alamat"  type="text"  class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor telfon :</label>
                            <input name="no_telp"  type="text"  class="form-control" placeholder="" required>
                        </div>
                        <label>Deskripsi :</label>
                        <div class="form-group c_form_group">
                            <div class="input-group">
                                <textarea name="deskripsi" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Foto umkm</label>
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