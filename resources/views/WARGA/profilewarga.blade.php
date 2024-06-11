@extends('layouts_warga.app')

@section('content')
<!-- Page header section  -->
<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-12">
            <h1>Hi, Welcomeback!</h1>
            <span>My Profile!</span>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card social theme-bg gradient" style="margin-left: 0;">
            <div class="profile-header d-sm-flex justify-content-start">
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <img src="{{ asset('assets/images/user.png') }}" class="rounded" alt="">
                    </div>
                    <div class="details">
                        <h5 class="mb-0">{{$datauser->nama}}</h5>
                    </div>                                
                </div>
            </div>
        </div>                    
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">NIK</h5>
                                    <p class="card-text">{{$datauser->nik}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nama</h5>
                                    <p class="card-text">{{$datauser->nama}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">No. KK</h5>
                                    <p class="card-text">{{$datauser->no_kk}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">{{$datauser->alamat}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tanggal Lahir</h5>
                                    <p class="card-text">{{$datauser->tanggal_lahir}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pekerjaan</h5>
                                    <p class="card-text">{{$datauser->pekerjaan}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Status Kependudukan</h5>
                                    <p class="card-text">{{$datauser->status_kependudukan}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Luas Rumah</h5>
                                    <p class="card-text">{{$datauser->luas_rumah}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Agama</h5>
                                    <p class="card-text">{{$datauser->agama}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Golongan Darah</h5>
                                    <p class="card-text">{{$datauser->golongan_darah}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">status</h5>
                                    <p class="card-text">{{$datauser->status}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pendidikan Terakhir</h5>
                                    <p class="card-text">{{$datauser->pendidikan_terakhir}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">RT</h5>
                                    <p class="card-text">{{$datauser->rt}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Gaji</h5>
                                    <p class="card-text">{{$datauser->gaji}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Domisili</h5>
                                    <p class="card-text">{{$datauser->domisili}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tambahkan card untuk data yang lain sesuai dengan contoh di atas -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-auto">
            <div class="header">
                <h2>GANTI PASSWORD</h2>
            </div>
            <form action="{{ route('gantipassword') }}" method="POST">
                @csrf
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <hr>
                            <h6>Ubah Password</h6>
                            <input type="hidden" value="{{ $datauser->nik }}" name="nik">
                            <div class="form-group c_form_group">
                                <label> Password Baru</label>
                                <input type="password" name="password_baru" class="form-control" placeholder="Enter Password" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary theme-bg gradient">Submit</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
