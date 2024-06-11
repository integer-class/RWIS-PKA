<?php

namespace App\Http\Controllers;

use App\Models\citizenModel;
use App\Models\kartukeluargaModel;
use App\Models\kegiatanModel;
use App\Models\keuanganModel;
use App\Models\templatesuratModel;
use App\Models\umkmModel;
use App\Models\UserModel;
use Database\Seeders\umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        //Total iuran PHB
        $total_pemasukanPHB = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran PHB')->sum('jumlah');
        $total_pengeluaranPHB = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran PHB')->sum('jumlah');
        $iuranPHB = number_format(($total_pemasukanPHB - $total_pengeluaranPHB), 0, ',', '.');

        //Total iuran kematian
        $total_pemasukanKematian = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran kematian')->sum('jumlah');
        $total_pengeluaranKematian = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran kematian')->sum('jumlah');
        $iuranKematian = number_format(($total_pemasukanKematian - $total_pengeluaranKematian), 0, ',', '.');

        //Total iuran Listrik
        $total_pemasukanListrik = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran Listrik')->sum('jumlah');
        $total_pengeluaranListrik = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran Listrik')->sum('jumlah');
        $iuranListrik = number_format(($total_pemasukanListrik - $total_pengeluaranListrik), 0, ',', '.');

        //Total iuran Sampah
        $total_pemasukanSampah = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran Sampah')->sum('jumlah');
        $total_pengeluaranSampah = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran Sampah')->sum('jumlah');
        $iuranSampah =number_format(($total_pemasukanSampah - $total_pengeluaranSampah), 0, ',', '.');


        $warga=citizenModel::all();
        $templatesurat=templatesuratModel::all();
        $umkm=umkmModel::all();
        $kegiatan=kegiatanModel::all();
    
        $ketuaRtNik = UserModel::where('Role', '2')->pluck('nik');
        $nama_ketua = CitizenModel::whereIn('nik', $ketuaRtNik)->get(['nik', 'rt', 'nama']);

        
        $ketuaRt1 = $nama_ketua->where('rt', '1')->first();
        $ketuaRt2 = $nama_ketua->where('rt', '2')->first();
        $ketuaRt3 = $nama_ketua->where('rt', '3')->first();


        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();

       return view('warga.index',compact('nama_pengguna','ketuaRt3','ketuaRt2','ketuaRt1','iuranSampah','iuranListrik','iuranKematian','iuranPHB','warga','umkm','kegiatan','templatesurat'));

    }
    public function datawarga(){
        $datawarga = citizenModel::paginate(10);
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('warga.datawarga',compact('nama_pengguna','datawarga'));
    }
    public function data_keluarga()
    {
        $user = Auth::user();
        
        // Retrieve the user's data and pluck the 'no_kk' value
        $no_kk = citizenModel::where('nik', $user->nik)->value('no_kk');

        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        // Retrieve the family members based on the 'no_kk'
        $keluarga = citizenModel::where('no_kk', $no_kk)->get();

        return view('warga.datakeluarga', compact('nama_pengguna', 'keluarga'));

    }
    public function warga_data_Keuangan(Request $request){
        //FIltering with query condition
        $query = keuanganModel::query();

        if ($request->filled('start_date') && $request->filled('end_date') && $request->filled('keterangan')){
            $query->where('tanggal', '>=', $request->start_date)
            ->where('tanggal', '<=', $request->end_date)
            ->where('jenis_iuran', $request->keterangan);

            $data_keuangan = $query->get();
        }else( $data_keuangan = keuanganModel::all());

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
        $data_keuangan = $query->orderby('tanggal','desc')->paginate(10);

        //Total iuran PHB
        $total_pemasukanPHB = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran PHB')->sum('jumlah');
        $total_pengeluaranPHB = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran PHB')->sum('jumlah');
        $iuranPHB = '' . number_format(($total_pemasukanPHB - $total_pengeluaranPHB), 0, ',', '.');

        //Total iuran kematian
        $total_pemasukanKematian = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran kematian')->sum('jumlah');
        $total_pengeluaranKematian = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran kematian')->sum('jumlah');
        $iuranKematian = '' . number_format(($total_pemasukanKematian - $total_pengeluaranKematian), 0, ',', '.');

        //Total iuran Listrik
        $total_pemasukanListrik = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran Listrik')->sum('jumlah');
        $total_pengeluaranListrik = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran Listrik')->sum('jumlah');
        $iuranListrik = '' . number_format(($total_pemasukanListrik - $total_pengeluaranListrik), 0, ',', '.');

        //Total iuran Sampah
        $total_pemasukanSampah = keuanganModel::where('jenis_data', 'pemasukan')->where('jenis_iuran','iuran Sampah')->sum('jumlah');
        $total_pengeluaranSampah = keuanganModel::where('jenis_data', 'pengeluaran')->where('jenis_iuran','iuran Sampah')->sum('jumlah');
        $iuranSampah = '' . number_format(($total_pemasukanSampah - $total_pengeluaranSampah), 0, ',', '.');

        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('warga.datakeuangan',compact('nama_pengguna','data_keuangan','iuranSampah','iuranListrik','iuranPHB','iuranKematian'));
    }
   
    public function DataUmkm(){
        $umkm = umkmModel::paginate(10);
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('warga.dataumkm',compact('nama_pengguna','umkm'));
    }
    public function detailumkm($id)
    {
        // Ambil data UMKM berdasarkan ID
        $umkm = umkmModel::find($id);

        // Periksa apakah data UMKM ditemukan
        if (!$umkm) {
            return redirect()->back()->with('error', 'Data UMKM tidak ditemukan.');
        }

        // Kirim data UMKM ke view
        return view('warga.detailumkm', compact('umkm'));
    }
    public function DataKegiatan(){
        $kegiatan = kegiatanModel::all();
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('warga.datakegiatan',compact('nama_pengguna','kegiatan'));
    }
    public function templatesurat(){
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        $templatesurat = templatesuratModel::paginate(10);
        return view('warga.templatesurat',compact('nama_pengguna','templatesurat'));
    }
    public function Databansos (){
        
        $bansos = citizenModel::where(function ($query) {
            // Tambahkan kriteria untuk menentukan siapa yang layak menerima bantuan sosial
            $query->where('skorBansos', '>', 299); // Misalnya, hanya yang memiliki skorBansos di atas 300 yang dianggap layak
        })
        ->orderBy('skorBansos', 'desc') // Urutkan dari yang teratas (skorBansos tertinggi) ke yang terbawah
        ->paginate(10);

        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('warga.bansos',compact('nama_pengguna','bansos')); 
    }
    public function Profilewarga(){
        $citizen = citizenModel::all();

        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('warga.profilewarga',compact('nama_pengguna','datawarga'));

    }

}   
