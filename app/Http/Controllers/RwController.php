<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizenModel;
use App\Models\UserModel;
use Illuminate\Support\facades\Hash;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        return view('rw.index');
    }

    public function DataWarga(){
        $warga = citizenModel::all();
        return view('rw.datawarga',compact('warga'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function TambahDataWarga(Request $request)
    {

        // Simpan data ke dalam database menggunakan model
        citizenModel::create([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'nama' => $request->nama,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'status' => $request->status,
            'rt' => $request->rt,
            'domisili' => $request->domisili,
            'alamat' => $request->alamat_asli,
        ]);

        $user=UserModel::create([
            'nik' => $request->nik,
            'role' => '3',
            'password' => Hash::make('123'),
        ]);

    

        //Redirect ke halaman sukses atau halaman lain yang Anda inginkan
         return redirect('/datawarga');

        
    }
    public function TambahDataKK(Request $request)
    {

        // Simpan data ke dalam database menggunakan model
        
        

    

        //Redirect ke halaman sukses atau halaman lain yang Anda inginkan
         return redirect('/datawarga');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}