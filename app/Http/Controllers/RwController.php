<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizenModel;
use App\Models\kartukeluargaModel;
use App\Models\kegiatanModel;
use App\Models\keuanganModel;
use App\Models\templatesuratModel;
use App\Models\umkmModel;
use App\Models\UserModel;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RwController extends Controller
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
        return view('rw.index',compact('nama_pengguna','ketuaRt3','ketuaRt2','ketuaRt1','iuranSampah','iuranListrik','iuranKematian','iuranPHB','warga','umkm','kegiatan','templatesurat'));
    }

    public function DataWarga(Request $request){
        $query = citizenModel::query();
        if ($request->filled('nama')) {
            // Apply the search filter to the query
            $query->where('nama', 'like', '%' . $request->input('nama') . '%')
                  ->orWhere('nik', 'like', '%' . $request->input('nama') . '%');
        }
        $warga = $query->paginate(10);
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        
        return view('rw.datawarga',compact('nama_pengguna','warga'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function TambahDataWarga(Request $request)
    {
        
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'no_kk' => 'required|exists:kartukeluargaModel,no_kk',
            'alamat' => 'required',
            'status_kependudukan' => 'required',
            'domisili' => 'required',
            'rt' => 'required',
            'agama' => 'required',
            'golongan_darah' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan' => 'required',
            'luas_rumah' => 'required',
            'gaji' => 'required',
            
        ]);
        //fungsi hitung bansos
        
        //skor pendidikan
        if($request->pendidikan == 'SMA'){
            $skorPendidikan = 1;
        }else if($request->pendidikan == 'SMP'){
            $skorPendidikan = 2;
        }else if($request->pendidikan == 'SD'){
            $skorPendidikan = 3;
        }else if($request->pendidikan == 'Tidak Sekolah'){
            $skorPendidikan = 4;
        };
        //skor status
        if($request->status == 'janda/duda'){
            $skorStatus = 1;
        }else if($request->status == 'miskin'){
            $skorStatus = 2;
        }else if($request->status == 'sakit parah'){
            $skorStatus = 3;
        }else if($request->status == 'sebatang kara'){
            $skorStatus = 4;
        }
        //skor gaji
        if($request->gaji == '>1.000.000'){
            $skorGaji = 1;
        }else if($request->gaji == '600.000-1.000.000'){
            $skorGaji = 2;
        }else if($request->gaji == '400.000-600.000'){
            $skorGaji = 3;
        }else if($request->gaji == '0-400.000'){
            $skorGaji = 4;
        }
        //skor umur
        $usia = date_diff(date_create($request->tanggal_lahir), date_create('today'))->y;
        if($usia < 20){
            $skorUmur = 1;
        }else if($usia >= 20 && $usia < 40){
            $skorUmur = 2;
        }else if($usia >= 40 && $usia < 60){
            $skorUmur = 3;
        }else if($usia >= 60 ){
            $skorUmur = 4;
        }
        //skor luasrumah
        $rumah = $request->luas_rumah;
        if($rumah > 120){
            $skorRumah = 1;
        }else if($rumah >= 90 && $rumah < 120){
            $skorRumah = 2;
        }else if($rumah >= 70 && $rumah < 90){
            $skorRumah = 3;
        }else if($rumah < 70 ){
            $skorRumah = 4;
        }
        //skor Bansos
        $skorBansos = (($skorRumah * 15)+($skorUmur*25)+($skorGaji*30)+($skorStatus*20)+($skorPendidikan*10));


        citizenModel::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_kk' => $request->no_kk,
            'alamat' => $request->alamat,
            'status_kependudukan' => $request->status_kependudukan,
            'domisili' => $request->domisili,
            'rt' => $request->rt,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan' => $request->pendidikan,
            'luas_rumah' => $request->luas_rumah,
            'gaji' => $request->gaji,
            'skorbansos' => $skorBansos,
            
            
        ]);

        $user=UserModel::create([
            'nik' => $request->nik,
            'role' => '3',
            'password' => Hash::make('123'),
        ]);

    
        Alert::success('Success', 'Data berhasil diperbarui');
        return redirect()->back();
        //Redirect ke halaman sukses atau halaman lain yang Anda inginkan
         return redirect()->back();

        
    }

    public function EditDataWarga(Request $request)
    {

        //fungsi hitung bansos
        
        //skor pendidikan
        if($request->pendidikan == 'SMA'){
            $skorPendidikan = 1;
        }else if($request->pendidikan == 'SMP'){
            $skorPendidikan = 2;
        }else if($request->pendidikan == 'SD'){
            $skorPendidikan = 3;
        }else if($request->pendidikan == 'Tidak Sekolah'){
            $skorPendidikan = 4;
        };
        //skor status
        if($request->status == 'janda/duda'){
            $skorStatus = 1;
        }else if($request->status == 'miskin'){
            $skorStatus = 2;
        }else if($request->status == 'sakit parah'){
            $skorStatus = 3;
        }else if($request->status == 'sebatang kara'){
            $skorStatus = 4;
        }
        //skor gaji
        if($request->gaji == '>1.000.000'){
            $skorGaji = 1;
        }else if($request->gaji == '600.000-1.000.000'){
            $skorGaji = 2;
        }else if($request->gaji == '400.000-600.000'){
            $skorGaji = 3;
        }else if($request->gaji == '0-400.000'){
            $skorGaji = 4;
        }
        //skor umur
        $usia = date_diff(date_create($request->tanggal_lahir), date_create('today'))->y;
        if($usia < 20){
            $skorUmur = 1;
        }else if($usia >= 20 && $usia < 40){
            $skorUmur = 2;
        }else if($usia >= 40 && $usia < 60){
            $skorUmur = 3;
        }else if($usia >= 60 ){
            $skorUmur = 4;
        }
        //skor luasrumah
        $rumah = $request->luas_rumah;
        if($rumah > 120){
            $skorRumah = 1;
        }else if($rumah >= 90 && $rumah < 120){
            $skorRumah = 2;
        }else if($rumah >= 70 && $rumah < 90){
            $skorRumah = 3;
        }else if($rumah < 70 ){
            $skorRumah = 4;
        }
        //skor Bansos
        $skorBansos = (($skorRumah * 15)+($skorUmur*25)+($skorGaji*30)+($skorStatus*20)+($skorPendidikan*10));
        
        $citizen = CitizenModel::where('nik', $request->nik)->firstOrFail();



        // Update the citizen's data
        $citizen->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_kk' => $request->no_kk,
            'alamat' => $request->alamat,
            'status_kependudukan' => $request->status_kependudukan,
            'domisili' => $request->domisili,
            'rt' => $request->rt,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan' => $request->pendidikan,
            'luas_rumah' => $request->luas_rumah,
            'gaji' => $request->gaji,
            'skorbansos' => $skorBansos,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data berhasil diperbarui');

        
    }

    public function DataKeluarga(request $request){

    $query = kartukeluargaModel::withCount('citizens');

    // Check if the 'no_kk' field is filled in the request
    if ($request->filled('no_kk')) {
        // Apply the search filter to the query
        $query->where('no_kk', 'like', '%' . $request->input('no_kk') . '%');
    }

    // Execute the query and get the results
    $kartukeluarga = $query->paginate(10);
    $warga = citizenModel::all();

    $user = auth()->user();
          
     // Retrieve the user's name
    $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
    $nama_pengguna = $pengguna->first();
    
    return view('rw.datakeluarga',compact('kartukeluarga','warga','nama_pengguna'));
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

    public function DataKeuangan(Request $request){
        //FIltering with query condition
        $query = keuanganModel::query();

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

        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rw.datakeuangan',compact('data_keuangan','nama_pengguna'));
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
        return view('rw.datakegiatan',compact('kegiatan','nama_pengguna'));
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
        $umkm = umkmModel::where('persetujuan','disetujui')->paginate(10);
        $umkmBaru = umkmModel::where('persetujuan','belum disetujui')->paginate(10);
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rw.dataumkm',compact('umkm','umkmBaru','nama_pengguna'));
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

    $user = Auth::user();
    $userData = citizenModel::where('nik',$user->nik)->FirstOrFail();
    $namaUser = $userData->nama;
    
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
            'persetujuan' => 'belum disetujui',
            'nama_pengupload' => $namaUser,
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
            'no_telpon' => $request->no_telpon,
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
    
    public function SimpanUmkm(Request $request){
        $umkm = umkmModel::where('id',$request->id)->firstorfail();

        $umkm->update([
            'persetujuan' => 'disetujui'
        ]);

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus.');
    }

    public function templatesurat(){
        $templatesurat = templatesuratModel::all();
        $user = auth()->user();
          
        // Retrieve the user's name
        $pengguna = citizenModel::where('nik',$user->nik)->get('nama','nik');
        $nama_pengguna = $pengguna->first();
        return view('rw.templatesurat',compact('templatesurat','nama_pengguna'));
    }

    public function TambahSurat(Request $request)
    {
        // Validate the incoming request
    $request->validate([
        'nama_surat' => 'required|string|max:255',
        'deskripsi' => 'required',
        'surat' => 'required|file|mimes:docx,pdf,doc|max:2048'
        
    ]);

    // Handle the file upload
    if ($request->hasFile('surat')) {
        $surat = $request->file('surat');
        $namaSurat = time() . '_' . uniqid() . '.' . $surat->getClientOriginalExtension();
        $surat->move(public_path('Surat/'), $namaSurat);
    } else {
        $namaSurat = 'default.docx'; // Or handle the case when no image is uploaded
    }

        templatesuratModel::create([
            'nama_surat' => $request->nama_surat,
            'deskripsi'=> $request->deskripsi_surat,
            'nama_file_surat' => $namaSurat,
            
        ]);
        return redirect('templatesurat');
    }

    public function HapusSurat(Request $request){
        $templatesurat = templatesuratModel::where('id', $request->id)->firstOrFail();

        if ($templatesurat->surat && file_exists(public_path('Surat/' . $templatesurat->nama_file_surat))) {
            unlink(public_path('Surat/' . $templatesurat->nama_file_surat));
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
        
        return view('rw.bansos',compact('bansos','nama_pengguna')); 
    }

    public function GantiRt(Request $request){
        $nik_lama = $request->nik;
        $nik_baru = $request->nik_baru;

        $rt_lama = userModel::where('nik',$nik_lama);
        $rt_baru = userModel::where('nik',$nik_baru);

        $rt_lama -> update([
            'role' => '3'
        ]);
        $rt_baru -> update([
            'role' => '2'
        ]);
       
        return redirect()->back()->with('success','Ketua Rt berhasil diganti');
    }
}
