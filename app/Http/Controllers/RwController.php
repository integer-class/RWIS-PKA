<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizenModel;
use App\Models\kartukeluargaModel;
use App\Models\keuanganModel;
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
            'status_kependudukan' => $request->status_kependudukan,
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

    public function EditDataWarga(Request $request)
    {

        $citizen = CitizenModel::where('nik', $request->nik)->firstOrFail();

        // Update the citizen's data
        $citizen->update([
            'no_kk' => $request->no_kk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'nama' => $request->nama,
            'agama' => $request->agama,
            'status_kependudukan' => $request->status_kependudukan,
            'golongan_darah' => $request->golongan_darah,
            'status' => $request->status,
            'rt' => $request->rt,
            'domisili' => $request->domisili,
            'alamat' => $request->alamat_asli,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data berhasil diperbarui');

        
    }

    public function DataKeluarga(){
        $kartukeluarga = kartukeluargaModel::all();
        return view('rw.datakeluarga',compact('kartukeluarga'));
    }

    public function TambahDataKK(Request $request)
    {
        kartukeluargaModel::create([
            'no_kk' => $request->no_kk,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request-> provinsi,
            'rt' => $request-> rt,
            'rw' => $request->rw,
            'kepala_keluarga' =>$request->kepala_keluarga,
        ]);
        // Simpan data ke dalam database menggunakan model
        
        //Redirect ke halaman sukses atau halaman lain yang Anda inginkan
         return redirect('/datakeluarga');
    }

    public function DataKeuangan(){
        $data_keuangan = keuanganModel::all();
        //Total iuran PHB
        $total_pemasukanPHB = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran PHB')->sum('jumlah');
        $total_pengeluaranPHB = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran PHB')->sum('jumlah');
        $iuranPHB = 'Rp ' . number_format(($total_pemasukanPHB - $total_pengeluaranPHB), 0, ',', '.');

        //Total iuran kematian
        $total_pemasukanKematian = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran kematian')->sum('jumlah');
        $total_pengeluaranKematian = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran kematian')->sum('jumlah');
        $iuranKematian = 'Rp ' . number_format(($total_pemasukanKematian - $total_pengeluaranKematian), 0, ',', '.');

        //Total iuran Listrik
        $total_pemasukanListrik = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran Listrik')->sum('jumlah');
        $total_pengeluaranListrik = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran Listrik')->sum('jumlah');
        $iuranListrik = 'Rp ' . number_format(($total_pemasukanListrik - $total_pengeluaranListrik), 0, ',', '.');

        //Total iuran Sampah
        $total_pemasukanSampah = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran Sampah')->sum('jumlah');
        $total_pengeluaranSampah = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran Sampah')->sum('jumlah');
        $iuranSampah = 'Rp ' . number_format(($total_pemasukanSampah - $total_pengeluaranSampah), 0, ',', '.');

        return view('rw.datakeuangan',compact('data_keuangan','iuranSampah','iuranListrik','iuranPHB','iuranKematian'));
    }
    public function TambahDataKeuangan(Request $request)
    {
        keuanganModel::create([
            'tanggal' => $request->tanggal,
            'jenis_data' => $request->kategori,
            'jenis_iuran'=>$request->keterangan,
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            
        ]);
        // Simpan data ke dalam database menggunakan model
        
        //Redirect ke halaman sukses atau halaman lain yang Anda inginkan
         return redirect('data_keuangan');
    }
    
    public function EditDataKeuangan(Request $request)
    {
    $keuangan = keuanganModel::where('id', $request->id)->firstOrFail();

    // Update the citizen's data
    $keuangan->update([
        'tanggal'=> $request->tanggal,
        'jenis_data'=>$request->kategori,
        'nama'=>$request->nama,
        'jumlah'=>$request->jumlah,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Data berhasil diperbarui');
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
