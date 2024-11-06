<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $info = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($info)) {
            if (Auth::user()->role == 'Petugas') {
                return redirect('admin/petugas');
            } elseif (Auth::user()->role == 'Pimpinan') {
                return redirect('admin/pimpinan');
            } elseif (Auth::user()->role == 'Konsumen') {
                return redirect('admin/konsumen');
            }
        } else {
            return redirect()->back()->withErrors('Username dan Password yang Dimasukkan tidak Sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
