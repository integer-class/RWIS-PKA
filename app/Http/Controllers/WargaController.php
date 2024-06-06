<?php

namespace App\Http\Controllers;

use App\Models\citizenModel;
use App\Models\kartukeluargaModel;
use App\Models\kegiatanModel;
use App\Models\keuanganModel;
use App\Models\umkmModel;
use Database\Seeders\umkm;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        return view('warga.index');
    }
    public function datawarga(){
        $datawarga = citizenModel::all();
        return view('warga.datawarga',compact('datawarga'));
    }
    public function data_keluarga()
    {
        $kartukeluarga = kartukeluargaModel::all();
        return view('warga.datakeluarga', compact('kartukeluarga'));

    }
    public function Data_Keuangan(Request $request){
        //FIltering with query condition
        $query = keuanganModel::query();

        // if ($request->filled('start_date') && $request->filled('end_date') && $request->filled('keterangan')){
        //     $query->where('tanggal', '>=', $request->start_date)
        //     ->where('tanggal', '<=', $request->end_date)
        //     ->where('jenis_iuran', $request->keterangan);

        //     $data_keuangan = $query->get();
        // }else( $data_keuangan = keuanganModel::all());

        if ($request->filled('start_date') || $request->filled('end_date') || $request->filled('keterangan')){
            if ($request->filled('start_date')) {
                $query->where('tanggal', '>=', $request->start_date);
            }
        
            if ($request->filled('end_date')) {
                $query->where('tanggal', '<=', $request->end_date);
            }
        
            if ($request->filled('keterangan')) {
                $query->where('jenis_iuran', $request->keterangan);
            };
        }
        $data_keuangan = $query->orderby('tanggal','desc')->get();

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

        return view('warga.datakeuangan',compact('data_keuangan','iuranSampah','iuranListrik','iuranPHB','iuranKematian'));
    }
   
    public function DataUmkm(){
        $umkm = umkmModel::all();
        return view('rw.dataumkm',compact('umkm'));
    }
  

}   
