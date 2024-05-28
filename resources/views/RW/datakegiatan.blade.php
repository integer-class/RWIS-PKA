@extends('layouts.app')
@section('content')

    {{-- <div class="body">
        <ul class="nav nav-tabs3 white">
            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#daftar-kegiatan">Daftar Kegiatan</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tambah-kegiatan">Tambah Kegiatan</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="daftar-kegiatan">
                <h6>Home</h6>
                <p>master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui.</p>
            </div>
            <div class="tab-pane" id="tambah-kegiatan">
                
                <div class="card">
                    <div class>
                    <div class="header">
                        <h2>With event and default file <small>try to remove the image</small></h2>
                    </div>
                    <div class="body">
                        <input type="file" id="dropify-event" data-default-file="assets/images/kegiatan/default.png">
                    </div>
                    </div>
                </div>   

            </div>
            
        </div>
    </div> --}}

    <div class="card">
        <div class="header">
          <div class="text-info"><h2>Daftar Kegiatan</h2></div>
        </div>
        <div class="body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkegiatan">Tambah Kegiatan</button>
        </div>
    </div>

    <div class="card">
        <div class="header">
            <div class="text-danger"> yah nanti ini diisi</div>
        </div>
        <div class="body">
            <div class="text-info">ini nanti card isinya list kegiatan </div>
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
                    <div class="form-group">
                        <label for="">Nama Kegiatan :</label>
                        <input name="nama_kegiatan" type="text"  class="form-control" placeholder=" nomor RW" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal :</label>
                        <input name="tanggal" type="date"  class="form-control" placeholder=" nomor RW" required>
                    </div>
                    <label>Deskripsi :</label>
                    <div class="form-group c_form_group">
                        <input name="keterangan"  type="text" class="form-control" placeholder="alamat lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Kegiatan</label>
                        <input type="text" class="dropify">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary theme-bg gradient">Save changes</button>
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