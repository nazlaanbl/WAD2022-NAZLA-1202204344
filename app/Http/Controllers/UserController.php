<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function halamanRegister()
    {
        return view('register-nazla');
    }

    public function halamanLogin()
    {
        return view('login-nazla');
    }

    public function register(Request $request)
    {
        if ($request->password != $request->password2) {
            return redirect('/register');
        } else {
            $encrypted = bcrypt($request->password);
            User::create([
                'email' => $request->email,
                'name' => $request->nama,
                'no_hp' => $request->nomor_handphone,
                'password' => $encrypted,
            ]);
        }
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $auth = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($auth) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else{
            return redirect('/login');
        }; 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
