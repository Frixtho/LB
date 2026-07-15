<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Menampilkan Halaman Login
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/home');
        }

        // Ubah dari 'login' menjadi 'auth.login'
        return view('auth.login'); 
    }
    /**
     * Memproses Data Form Login
     */
    public function processLogin(Request $request)
    {
        // 1. Ambil data sekalian validasi, lalu simpan ke dalam variabel $credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Sekarang variabel $credentials sudah ada nilainya dan aman digunakan
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
            Session::put('logged_in', true);

            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang kembali!');
        }

        return redirect()->back()->with('error_message', 'Email atau password yang Anda masukkan salah.');
    }

    /**
     * Menangani Proses Logout
     */
    public function logout()
    {
        // Menghapus seluruh data session login
        Session::forget(['logged_in', 'user_email']);
        Session::flush();

        return redirect('/home')->with('success', 'Anda telah berhasil logout.');
    }
}