@extends('layouts.app')
@section ('content')
 {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}

<div class="body">
    <ul class="nav nav-tabs3 white">
        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Data Warga</a></li>
    </ul>
    <div class="tab-content">
        {{-- tabel data warga --}}
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
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Nunuk</td>
                                        <td>Sulistiowati</td>
                                        <td>@Nunuk123</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Endah</td>
                                        <td>Kusriani</td>
                                        <td>@Endah123</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Ananda</td>
                                        <td>Azharuddin</td>
                                        <td>@ananda123</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Leksono </td>
                                        <td>Saputro</td>
                                        <td>@leksono123</td>
                                    </tr>
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