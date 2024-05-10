@extends('layouts.app')
@section ('content')
 {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}

<div class="body">
    <ul class="nav nav-tabs3 white">
        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Data Warga</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-new2">Tambah Warga</a></li>
        <li class="na-item"><a class="nav-link" data-toggle="tab" href="#Tambah-KK">Tambah KK</a></li>

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
                                                      nama           :  {{$penduduk->nama}}<br>
                                                      alamat         :      {{$penduduk->alamat}}<br>
                                                      rt             :  {{$penduduk->rt}}<br>
                                                      agama          :  {{$penduduk->agama}}<br>
                                                      golongan darah :  {{$penduduk->golongan_darah}}<br>
                                                      jenis kelamin  :  {{$penduduk->jenis_kelamin	}}<br>
                                                      pekerjaan      :  {{$penduduk->pekerjaan}}<br>
                                                      no_kk          :  {{$penduduk->no_kk }}<br>
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
        
        {{-- Detail Modals --}}
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
            <h6>Profile</h6>
            <p>pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel </p>
        </div>
        <div class="tab-pane" id="Contact-new2">
            <h6>Contact</h6>
            <p>labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. helvetica</p>
        </div>
        <div class="tab-pane" id="Tambah-KK">
            <h6>Contact</h6>
            <p>labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. helvetica</p>
        </div>
    </div>
</div>



@endsection

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>