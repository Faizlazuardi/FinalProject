<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Simpan data user ke dalam database
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Encrypt password
        $user->save();

    // Redirect langsung ke view tanpa melewati rute
    return view('auth.login')->with('success', 'User registered successfully!');
    }
}

