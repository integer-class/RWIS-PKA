<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        //kita ambil data user lalu simpan pada variabel $user
        $user = Auth::user();

        //konidisi jika user nya ada
        if ($user) {
            //jika user nya memiliki level admin
            if ($user->role == '1') {
                return redirect()->intended('RW');
            }
            //jika user nya memiliki level manager 
            else if ($user->role == '2') {
                return redirect()->intended('RT');
            }
            else if ($user->role == '3') {
                return redirect()->intended('warga');
            }
        }
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        // $nik = $request->nik;
        // $password = $request->password;


        // echo $nik;
        // echo $password;

        //kita buat validasi pada saat tombol login di klik
        //validasi nya username dan password wajib diisi
        $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ]);
        //ambil data request username dan password saja
        $credential = $request->only('nik','password');
        //cek jika data username dan password valid (sesuai) dengan data
        if (Auth::attempt($credential)) {

            //kalau berhasil simpan data user ya di variabel $user
            $user = Auth::user();

            //cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->role == '1') {
                //dd($user->level_id);
                return redirect()->intended('RW');
            } 
            //tapi jika level user nya user biasa maka arahkan ke halaman user
            else if ($user->role == '2') {
                return redirect()->intended('RT');
            }
            else if ($user->role =='3'){
                return redirect()->intended('warga');
            }
            //jika belum ada role maka ke halaman /
            return redirect()->intended('/');
        }
        //jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        //pastikan kirim pesan error juga kalau login gagal ya
        return redirect()->route('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Pastikan kembali nik dan password yang dimasukan sudah benar']);
    }

    public function register()
    {
        //tampilkan view register
        return view('register');
    }

    //aksi form register
    public function proses_register(Request $request)
    {
        //kita buat validasi buat proses register
        //validasinya yaitu semua field wajib diisi
        //validasi username harus unique 
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ]);
        // kalau gagal kemnbali ke halaman register dengan munculkan pesan error
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        $request['level_id'] = '2';
        $request['password'] = Hash::make($request['password']);

        //masukkan semua data pada request ke table user
        UserModel::create($request->all());

        // jika berhasil arahkan ke halaman login
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        //logout menghapus session
        $request->session()->flush();

        //jalan kan juga fungsi logout pada auth
        Auth::logout();
        //kembali ke halaman login
        return redirect('login');
    }
}