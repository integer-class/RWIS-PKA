@extends('layouts_warga.app')
@section('content')
<div class="body">
    <div class="card">
        <div class="card-body bg-info text-white text-center font-weight-bold" style="background-image: url('https://i.pinimg.com/564x/de/ea/c4/deeac425fb083d56c930cc8cfab8a682.jpg'); background-size: cover; background-position: center;">
            <p class="card-text">Selamat Datang di Halaman Penerima BANSOS!</p>
            <form class="mx-auto" style="width: 400px;">
            </form>    
        </div>
    </div>
    <div class="rowfix">
        <div class="card">
            <div class="header">
                <h2>Daftar penerima BLT</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        @foreach ($bansos as $data_bansos)
                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data_bansos->nik}}</td>
                                <td>{{$data_bansos->nama}}</td>
                                <td>{{$data_bansos->alamat}}</td>
                            </tr>    
                        @endforeach
                        </tbody>
                    </table>
                    {{-- Button Pagination --}}
                    <div class="text-center mt-3">
                        <a href="{{ $bansos->previousPageUrl() }}" class="btn btn-primary {{ $bansos->onFirstPage() ? 'disabled' : '' }}">Previous</a>
                        <a href="{{ $bansos->nextPageUrl() }}" class="btn btn-primary {{ $bansos->hasMorePages() ? '' : 'disabled' }}">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection