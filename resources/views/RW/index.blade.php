@extends('layouts.app');
@section('content')

<div class="container-fluid">
    <!-- Page header section  -->
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h1>Hi, Selamat Datang!</h1>
                <span>Sistem Informasi RW01</span>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                        <p class="text-muted mb-1">Warga Rt 1 <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">{{$warga->where('rt','1')->count()}}</h5>
                    </div>
                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                        <p class="text-muted mb-1">Warga RT 2 <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">{{$warga->where('rt','2')->count()}}</h5>
                    </div>
                    <div class="mb-3 mb-xl-0">
                        <p class="text-muted mb-1">Warga RT 3 <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">{{$warga->where('rt','3')->count()}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-7">
                            <h5 class="mb-0"></h5>
                            <small class="info">of 1Tb</small>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="m-b-0">62%</h2>
                        </div>
                        <div class="col-12">                                    
                            <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="87"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-7">
                            <h5 class="mb-0"></h5>
                            <small class="info">of 31</small>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="m-b-0">62%</h2>
                        </div>
                        <div class="col-6">                                    
                            <button type="button" class="btn btn-link">ganti</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-7">
                            <h5 class="mb-0"></h5>
                            <small class="info">of 10</small>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="m-b-0">2</h2>
                        </div>
                        <div class="col-12">                                    
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="67"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>

    <div class="row clearfix">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">
                <a class="navbar-brand" href="#">Rekapitulasi Data Rw 01 Bokor</a>
            </nav>
        </div>
        <div class="col-12">
            <div class="card theme-bg gradient">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Iuran Kematian</div>
                                    <div class="mt-3 h1">{{$iuranKematian}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Iuran PHB</div>
                                    <div class="mt-3 h1">{{$iuranPHB}}</div>                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Iuran Sampah</div>
                                    <div class="mt-3 h1">{{$iuranSampah}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Iuran Listrik</div>
                                    <div class="mt-3 h1">{{$iuranListrik}}</div>                                   
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6">
            <div class="card p-3 px-4">
                <div>Total UMKM</div>
                <div class="py-4 m-0 text-center h1 text-success">{{$umkm->where('persetujuan','disetujui')->count()}}</div>
                <div class="d-flex">
                    <button type="button" class="btn btn-link">
                        <small >Cek Disini</small>
                    </button>
                    
                </div>
            </div>
        </div>                
        <div class="col-lg-3 col-md-6">
            <div class="card p-3 px-4">
                <div>Total Kegiatan</div>
                <div class="py-4 m-0 text-center h1 text-info">{{$kegiatan->count()}}</div>
                <div class="d-flex">
                    <button type="button" class="btn btn-link">
                        <small >Cek Disini</small>
                    </button>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card p-3 px-4">
                <div>Total Penerima BLT</div>
                <div class="py-4 m-0 text-center h1 text-warning">{{$warga->where('skorbansos', '>', 299)->count()}}</div>
                <div class="d-flex">
                    <button type="button" class="btn btn-link">
                        <small >Cek Disini</small>
                    </button>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card p-3 px-4">
                <div>Total Template Surat</div>
                <div class="py-4 m-0 text-center h1 text-danger">{{$templatesurat->count()}}</div>
                <div class="d-flex">
                    <button type="button" class="btn btn-link">
                        <small >Cek Disini</small>
                    </button>
                    
                </div>
            </div>
        </div>
    </div>

</div>


@endsection


