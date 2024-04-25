<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        //mengambil data user lalu simpan pada variable $user
        $user = Auth::user();

        //kondisi jika usernya ada
        if ($user) {
            //jika usernya memiliki level admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            //jika usernya memiliki level manager
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //ambil data request username dan password saja
        $credential = $request->only('username', 'password');
        //cek jika data username dan password valid atau sesuai dengan data
        if (Auth::attempt($credential)) {
            //kalau berhasil simpan data user di variabel $user
            $user = Auth::user();
            //cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            //tapi jika level user nya user biasa maka arahkan ke halaman user
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
            //jika belum ada role maka ke halaman
            return redirect()->intended('/');
        }
        //jika tidak ada data user yang valid maka kembalikan ke halaman login dan juga kirim pesan error
        return redirect('login')
        ->withInput()
        ->withErrors(['Login_gagal' => 'Pastikan kembali username dan password yang dimasukkan sudah benar!']);
    }

    public function register() {
        //tampilkan view register
        return view('register');
    }

    //aksi form register
    public function proses_register(Request $request) {
        //validasi untuk register
        //semua field wajib diisi dan username harus unique
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required'
        ]);

        //kalau gagal kembali ke halaman register dengan pesan error
        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors([$validator])
            ->withInput();
        }
        //kalau berhasil isi level, hash passwordnya
        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        //masukkan semua data pada request ke tabel user
        UserModel::create($request->all());

        //arahkan ke hlmn login jika berhasil
        return redirect()->route('login');
    }

    public function logout(Request $request) {
        //hapus session
        $request->session()->flush();
        //jalankan fungsi logout pada auth
        Auth::logout();
        return redirect('login');
    }
}
