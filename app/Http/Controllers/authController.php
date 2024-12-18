<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Memproses login
    public function processLogin(Request $request){
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    }

    return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }


    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('login.register');
    }

    public function processRegister(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    try {
        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->save();

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    } catch (\Exception $e) {
        return back()->withErrors(['fail' => 'Registration failed. Please try again.']);
    }
    }

    
    public function home()
    {
        return view('home');
    }

}
