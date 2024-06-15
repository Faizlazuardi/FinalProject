<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        // Simpan data user ke dalam database
        $user = new User();
        $user->user_id = uuid_create();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Encrypt password
        $user->role = "user";
        $user->save();
        // Autentikasi pengguna setelah registrasi
        Auth::login($user);
        // Redirect ke halaman yang sesuai, misalnya halaman dashboard atau halaman utama
        return redirect()->intended('/');
    }

    public function login(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Dapatkan kredensial dari input
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Periksa apakah checkbox "Remember Me" diaktifkan

        // Coba login dengan opsi "Remember Me"
        if (Auth::attempt($credentials, $remember)) {
            // Jika berhasil, redirect ke halaman yang diinginkan
            return redirect()->intended('/');
        } else {
            // Jika gagal, kembalikan ke halaman login dengan pesan kesalahan
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
