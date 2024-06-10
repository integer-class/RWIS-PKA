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
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    @foreach ($bansos as $data_bansos)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data_bansos->nik}}</td>
                            <td>{{$data_bansos->nama}}</td>
                            <td>{{$data_bansos->alamat}}</td>
                            <td>
                                <button class="btn btn-link" data-toggle="modal" data-target="#kondisi{{$data_bansos->id}}" >Lihat</button>
                            </td>
                        </tr>    
                    {{-- Kondisi --}}
                    <div class="modal fade" id="kondisi{{$data_bansos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Kondisi {{$data_bansos->nama}}</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                         <p>Status</p>
                                         <p>Pendidikan terakhir</p>
                                         <p>Rentang Gaji/pendapatan</p>
                                         <p>Umur</p>
                                         <p>Luas Rumah</p>
                                        </div>   
                                        <div class="col-md-7">
                                         <p>:{{$data_bansos->status}}</p>
                                         <p>:{{$data_bansos->pendidikan}}</p>
                                         <p>:{{$data_bansos->gaji}}</p>
                                         <p>:{{date_diff(date_create($data_bansos->tanggal_lahir), date_create('today'))->y}} tahun</p>
                                         <p>:{{$data_bansos->luas_rumah}}M2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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




@endsection