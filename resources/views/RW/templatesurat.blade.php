@extends('layouts.app')
@section('content')

      <div class="body">
        <ul class="nav nav-tabs3 white">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tambah-surat"><h1>DAFTAR surat</h1></a></li>
        </ul>

        
                <div class="card">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahsurat">Tambah surat</button>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama surat</th>
                                                <th>deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($templatesurat as $data_surat)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data_surat->nama_surat}}</td>
                                                <td>{{$data_surat->deskripsi_surat}}</td>
                                                <td>
                                                    <form action="{{ route('downloadsurat', $data_surat->id) }}" method="GET" style="display:inline;">
                                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> <span>Download</span></button>
                                                    </form>
                                                    
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Hapussurat{{$data_surat->id}}">Hapus</button>
                                                </td>
                                            </tr>

                                            
                                            {{-- HAPUS --}}
                                            <div class="modal fade" id="Hapussurat{{$data_surat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Hapus surat</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form method="POST" action="{{route('prosesHapussurat')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data_surat->id}}" >
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
            


    {{-- Tambah surat --}}
    <div class="modal fade" id="tambahsurat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('prosesTambahsurat')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="">Nama surat :</label>
                            <input name="nama_surat" type="text"  class="form-control" placeholder="" required>
                        </div>
                        <label>Deskripsi :</label>
                        <div class="form-group c_form_group">
                            <div class="input-group">
                                <textarea name="deskripsi_surat" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">file Surat</label>
                            <input type="file" name="image" class="form-controll">
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