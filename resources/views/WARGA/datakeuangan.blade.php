@extends('layouts_warga.app')
@section ('content')
 {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/mooli.min.css')}}"> --}}
 <div class="body">
    <div class="card">
        <div class="card-body bg-info text-white text-center font-weight-bold" style="background-image: url('https://assets.pikiran-rakyat.com/crop/0x0:720x381/x/photo/2020/09/09/498775802.jpg'); background-size: cover; background-position: center;">
            <p class="card-text">Selamat Datang di Halaman Iuran Warga!</p>
            <form class="mx-auto" style="width: 400px;">
            </form>    
        </div>
    </div>
    
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                        <div class="ml-4">
                            <span>Iuran Sampah</span>
                            <h4 class="mb-0 font-weight-medium">{{$iuranSampah}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                        <div class="ml-4">
                            <span>Iuran Listrik</span>
                            <h4 class="mb-0 font-weight-medium">{{$iuranListrik}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                        <div class="ml-4">
                            <span>Iuran PHB</span>
                            <h4 class="mb-0 font-weight-medium">{{$iuranPHB}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                        <div class="ml-4">
                            <span>Iuran Kematian</span>
                            <h4 class="mb-0 font-weight-medium">{{$iuranKematian}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
    </div>
</div>
{{-- Tabel Keuangan --}}
<div class="card">
    <div class="header">
        <h2>Laporan keuangan RW 01</h2>
        {{-- <h2>Filter Laporan Keuangan RW 01</h2> --}} 
        <form method="GET" action="{{ route('warga_data_keuangan') }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="start_date">Tanggal Mulai</label>
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="end_date">Tanggal Akhir</label>
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <select name="keterangan" class="form-control">
                            <option value="">Pilih Jenis Iuran</option>
                            <option value="iuran PHB" {{ request('keterangan') == 'iuran PHB' ? 'selected' : '' }}>iuran PHB</option>
                            <option value="iuran Kematian" {{ request('keterangan') == 'iuran Kematian' ? 'selected' : '' }}>iuran Kematian</option>
                            <option value="iuran Listrik" {{ request('keterangan') == 'iuran Listrik' ? 'selected' : '' }}>iuran Listrik</option>
                            <option value="iuran Sampah" {{ request('keterangan') == 'iuran Sampah' ? 'selected' : '' }}>iuran Sampah</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Nama</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_keuangan as $keuangan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$keuangan->tanggal}}</td>
                        <td>{{$keuangan->jenis_data}} </td>
                        <td>{{$keuangan->nama}}</td>
                        <td>{{$keuangan->jumlah}}</td>
                        <td>{{$keuangan->jenis_iuran}}</td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
            {{-- Button Pagination --}}
            <div class="text-center mt-3">
                <a href="{{ $warga->previousPageUrl() }}" class="btn btn-primary {{ $warga->onFirstPage() ? 'disabled' : '' }}">Previous</a>
                <a href="{{ $warga->nextPageUrl() }}" class="btn btn-primary {{ $warga->hasMorePages() ? '' : 'disabled' }}">Next</a>
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
