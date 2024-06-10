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
                            <h5 class="mb-0">{{$ketuaRt1->nama}}</h5>
                            <small class="info">KETUA RT 1</small>
                        </div>
                        
                        <div class="col-12">                                    
                            <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="100"></div>
                            </div>
                        </div><br>
                        <div class="col-6">                                    
                                <button type="button" data-toggle="modal" data-target="#gantirt1" class="btn btn-link">Ganti Ketua RT</button>
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
                            <h5 class="mb-0">{{$ketuaRt2->nama}}</h5>
                            <small class="info">KETUA RT 2</small>
                        </div>
                        <div class="col-12">                                    
                            <div class="progress progress-xxs progress-transparent custom-color-orange mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="100"></div>
                            </div>
                        </div><br>
                        <div class="col-6">                                    
                            <button type="button" data-toggle="modal" data-target="#gantirt2" class="btn btn-link">Ganti Ketua RT</button>
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
                            <h5 class="mb-0">{{$ketuaRt3->nama}}</h5>
                            <small class="info">KETUA RT 3</small>
                        </div>
                        <div class="col-12">                                    
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="100"></div>
                            </div>
                        </div><br>
                        <div class="col 6">
                            <button class="btn btn-link" data-toggle="modal" data-target="#gantirt3">Ganti Ketua RT</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>                
    </div>

    {{-- Modals Rt 1 --}}
    <div class="modal fade" id="gantirt1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ganti Ketua RT 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="{{$ketuaRt1->nik}}">
                    <div class="alert alert-warning" >
                       Pastikan nik sudah terdaftar di data warga
                    </div>
                    {{-- <p><small> Pastikan nik sudah terdaftar di data warga </small></p> --}}
                    <div class="form-group">
                        <label for="">Masukkan NIK Ketua Rt :</label>
                        <input name="nik_baru" type="text" class="form-control" placeholder="NIK" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary theme-bg gradient">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modals Rt 2 --}}
    <div class="modal fade" id="gantirt2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ganti Ketua RT 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="{{$ketuaRt2->nik}}">
                    <div class="alert alert-warning" >
                       Pastikan nik sudah terdaftar di data warga
                    </div>
                    {{-- <p><small> Pastikan nik sudah terdaftar di data warga </small></p> --}}
                    <div class="form-group">
                        <label for="">Masukkan NIK Ketua Rt :</label>
                        <input name="nik_baru" type="text" class="form-control" placeholder="NIK" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary theme-bg gradient">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modals Rt 3 --}}
    <div class="modal fade" id="gantirt3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ganti Ketua RT 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="{{$ketuaRt3->nik}}">
                    <div class="alert alert-warning" >
                       Pastikan nik sudah terdaftar di data warga
                    </div>
                    {{-- <p><small> Pastikan nik sudah terdaftar di data warga </small></p> --}}
                    <div class="form-group">
                        <label for="">Masukkan NIK Ketua Rt :</label>
                        <input name="nik_baru" type="text" class="form-control" placeholder="NIK" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary theme-bg gradient">Simpan</button>
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


