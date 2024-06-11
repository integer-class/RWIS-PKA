<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizenModel;
use App\Models\kartukeluargaModel;
use App\Models\kegiatanModel;
use App\Models\keuanganModel;
use App\Models\templatesuratModel;
use App\Models\umkkmModel;
use App\Models\umkmModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Hash;

class RtController extends Controller
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

       return view('rt.index',compact('nama_pengguna','ketuaRt3','ketuaRt2','ketuaRt1','iuranSampah','iuranListrik','iuranKematian','iuranPHB','warga','umkm','kegiatan','templatesurat'));

    }

    public function DataWarga(){
        $user = Auth::user();
        $userData = CitizenModel::where('nik', $user->nik)->firstOrFail();

        $query = CitizenModel::query();
        $query->where('rt', $userData->rt);
        
        $warga = $query->paginate(10);

        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rt.datawarga', compact('nama_pengguna','warga'));

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

    public function DataKeluarga(Request $request){
  
        $user = auth()->user();

        // Extracting the value from the plucked collection
        $rtUser = citizenModel::where('nik', $user->nik)->value('rt');
    
        $query = kartukeluargaModel::where('rt', $rtUser)->withCount('citizens');
    
        // Check if the 'no_kk' field is filled in the request
        if ($request->filled('no_kk')) {
            // Apply the search filter to the query
            $query->where('no_kk', 'like', '%' . $request->input('no_kk') . '%');
        }
    
        // Execute the query and get the results
        $kartukeluarga = $query->paginate(10);
    
        // You may not need to retrieve all 'warga' records here, as it seems unused
        $warga = citizenModel::all();
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik', $user->nik)->firstOrFail(); // Get the user data directly
        $nama_pengguna = $pengguna->first(); // Access 'nama' attribute directly
    
        return view('rt.datakeluarga', compact('nama_pengguna', 'kartukeluarga','warga'));
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
         return redirect('/rt_datakeluarga');
    }

    public function DataKeuangan(Request $request){
        //FIltering with query condition
        $user = Auth::user();
        $userData = CitizenModel::where('nik', $user->nik)->firstOrFail();

        $rt= $userData->rt;

        $query = keuanganModel::query();
        $query->where('rt', $userData->rt);
        

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
        $iuranPHB =  number_format(($total_pemasukanPHB - $total_pengeluaranPHB), 0, ',', '.');

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
        $iuranSampah = number_format(($total_pemasukanSampah - $total_pengeluaranSampah), 0, ',', '.');

        
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rt.datakeuangan',compact('nama_pengguna','data_keuangan','iuranSampah','iuranListrik','iuranPHB','iuranKematian', 'rt'));
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
         return redirect('data_keuangan');
    }
    
    public function EditDataKeuangan(Request $request)
    {
    $keuangan = keuanganModel::where('id', $request->id)->firstOrFail();

    // Update the financial's data
    $keuangan->update([
        'tanggal'=> $request->tanggal,
        'jenis_data'=>$request->kategori,
        'jenis_iuran' =>$request->keterangan,
        'nama'=>$request->nama,
        'jumlah'=>$request->jumlah,
    ]);

    // Redirect back with a success message
    return redirect('data_keuangan')->with('success', 'Data berhasil diperbarui');
    }


    public function DataKegiatan(){
        $kegiatan = kegiatanModel::all();
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rt.datakegiatan',compact('nama_pengguna','kegiatan'));
    }


    public function TambahKegiatan(Request $request)
    {
        // Validate the incoming request
    $request->validate([
        'nama_kegiatan' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'deskripsi' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle the file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/kegiatan'), $imageName);
    } else {
        $imageName = 'default.png'; // Or handle the case when no image is uploaded
    }

        kegiatanModel::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal'=> $request->tanggal,
            'deskripsi'=> $request->deskripsi,
            'gambar'=> $imageName,
        ]);
        return redirect('data_kegiatan');
    }

    public function EditDatakegiatan(Request $request)
    {
        $kegiatan = kegiatanModel::where('id', $request->id)->firstOrFail();
        
        
        //Check if a new image is uploaded
    if ($request->hasFile('image')) {
        // Get the uploaded image file
        $image = $request->file('image');
        // Generate a unique filename for the uploaded image
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        // Move the uploaded image to the desired directory
        $image->move(public_path('images/kegiatan'), $imageName);
        
        // Update the kegiatan's data including the new image filename
        $kegiatan->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
        ]);
        
    } else {
        // If no new image is uploaded, retain the existing image filename
        $kegiatan->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);
    }


        // Redirect back with a success message
         return redirect('data_kegiatan')->with('success', 'Data berhasil diperbarui');
        
    }

    public function HapusKegiatan(Request $request){
        $kegiatan = kegiatanModel::where('id', $request->id)->firstOrFail();

        if ($kegiatan->gambar && file_exists(public_path('images/kegiatan/' . $kegiatan->gambar))) {
            unlink(public_path('images/kegiatan/' . $kegiatan->gambar));
        }

        $kegiatan ->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus.');
    }

    public function DataUmkm(){
        $umkm = umkmModel::all();
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rt.dataumkm',compact('nama_pengguna','umkm'));
    }
    
    public function TambahUmkm(Request $request)
    {
        // Validate the incoming request
    $request->validate([
        'nama_umkm' => 'required|string|max:255',
        'nama_pemilik' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'no_telp' => 'required|string',
        'deskripsi' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle the file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/umkm'), $imageName);
    } else {
        $imageName = 'default.png'; // Or handle the case when no image is uploaded
    }

        umkmModel::create([
            'nama_umkm' => $request->nama_umkm,
            'nama_pemilik'=> $request->nama_pemilik,
            'no_telpon'=> $request->no_telp,
            'alamat' => $request->alamat,
            'deskripsi'=> $request->deskripsi,
            'gambar'=> $imageName,
        ]);
        return redirect('data_umkm');
    }

    public function EditDataumkm(Request $request)
    {
        $umkm = umkmModel::where('id', $request->id)->firstOrFail();
        
        
        //Check if a new image is uploaded
    if ($request->hasFile('image')) {
        // Get the uploaded image file
        $image = $request->file('image');
        // Generate a unique filename for the uploaded image
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        // Move the uploaded image to the desired directory
        $image->move(public_path('images/umkm'), $imageName);
        
        // Update the kegiatan's data including the new image filename
        $umkm->update([
            'nama_umkm' => $request->nama_umkm,
            'nama_pemilik' => $request->nama_pemilik,
            'no_telpon' => $request->no_telp,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
        ]);
        
    } else {
        // If no new image is uploaded, retain the existing image filename
        $umkm->update([
            'nama_umkm' => $request->nama_umkm,
            'nama_pemilik' => $request->nama_pemilik,
            'no_telpon' => $request->no_telp,
            'deskripsi' => $request->deskripsi,
        ]);
    }


        // Redirect back with a success message
         return redirect('data_umkm')->with('success', 'Data berhasil diperbarui');
        
    }

    public function HapusUmkm(Request $request){
        $umkm = umkmModel::where('id', $request->id)->firstOrFail();

        if ($umkm->gambar && file_exists(public_path('images/umkm/' . $umkm->gambar))) {
            unlink(public_path('images/umkm/' . $umkm->gambar));
        }

        $umkm ->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus.');
    }

    public function templatesurat(){
        $templatesurat = templatesuratModel::all();
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rt.templatesurat',compact('nama_pengguna','templatesurat'));
    }

    public function TambahSurat(Request $request)
    {
        // Validate the incoming request
    $request->validate([
        'nama_file' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'surat' => 'required|file|mimes:docx,pdf|max:2048'
        
    ]);

    // Handle the file upload
    if ($request->hasFile('surat')) {
        $surat = $request->file('surat');
        $namaSurat = time() . '_' . uniqid() . '.' . $surat->getClientOriginalExtension();
        $surat->move(public_path('images/surat'), $namaSurat);
    } else {
        $namaSurat = 'default.docx'; // Or handle the case when no image is uploaded
    }

        templatesuratModel::create([
            'nama_surat' => $request->nama_surat,
            'tanggal'=> $request->tanggal,
            'surat' => $namaSurat,
            
        ]);
        return redirect('templatesurat');
    }
        
    public function HapusSurat(Request $request){
        $templatesurat = templatesuratModel::where('id', $request->id)->firstOrFail();

        if ($templatesurat->surat && file_exists(public_path('images/surat/' . $templatesurat->surat))) {
            unlink(public_path('images/surat/' . $templatesurat->surat));
        }

        $templatesurat ->delete();

        return redirect()->back()->with('success', 'surat berhasil dihapus.');
    }
    
    public function DownloadSurat($id)
    {
        // Retrieve the specific surat record by ID
        $surat = templatesuratModel::find($id);
    
        if (!$surat) {
            // Handle the case where the surat is not found
            return redirect()->back()->with('error', 'Surat not found.');
        }
    
        // Assuming the file path is stored in a 'surat' attribute
        $filePath = public_path('Surat/' . $surat->nama_file_surat);
    
        if (!file_exists($filePath)) {
            // Handle the case where the file does not exist
            return redirect()->back()->with('error', 'File not found.');
        }
    
        // Return the file as a response for download
        return response()->download($filePath, $surat->nama_surat . '.' . pathinfo($filePath, PATHINFO_EXTENSION));
    }

    public function Databansos (){
        
        $bansos = citizenModel::where(function ($query) {
            // Tambahkan kriteria untuk menentukan siapa yang layak menerima bantuan sosial
            $query->where('skorBansos', '>', 299); // Misalnya, hanya yang memiliki skorBansos di atas 300 yang dianggap layak
        })
        ->orderBy('skorBansos', 'desc') // Urutkan dari yang teratas (skorBansos tertinggi) ke yang terbawah
        ->get();
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rt.bansos',compact('nama_pengguna','bansos')); 
    }
}
