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
                        <h5 class="mb-0">Ananda Az Haruddin Salima</h5>
                    </div>                                
                </div>
            </div>
        </div>                    
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">NIK</h5>
                                    <p class="card-text">472751886</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nama</h5>
                                    <p class="card-text">teo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">No. KK</h5>
                                    <p class="card-text">472751886</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group c_form_group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">mbokor</p>
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


    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2>Account Data</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" value="louispierce" disabled placeholder="Username">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" value="louis.info@yourdomain.com"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <hr>
                        <h6>Change Password</h6>
                        <div class="form-group c_form_group">
                            <label>Current Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group c_form_group">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group c_form_group">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary theme-bg gradient">Update</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
