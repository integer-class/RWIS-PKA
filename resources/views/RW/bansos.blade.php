@extends('layouts.app')
@section('content')


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
            </div>
        </div>
    </div>
</div>




@endsection