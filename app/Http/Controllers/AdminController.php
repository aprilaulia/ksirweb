<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "Hallo, Selamat Datang";
        echo"<h1>". Auth::user()->name."</h1>";
        echo"<a href ='/logout'>Logout>></a>";
    }
    function Petugas(){
        echo "Hallo, Selamat Datang Petugas";
        echo"<h1>". Auth::user()->name."</h1>";
        echo"<a href ='/logout'>Logout>></a>";
    }
    function Pimpinan(){
        echo "Hallo, Selamat Datang Pimpinan";
        echo"<h1>". Auth::user()->name."</h1>";
        echo"<a href ='/logout'>Logout>></a>";
    }
    function Konsumen(){
        echo "Hallo, Selamat Datang di Halaman Konsumen";
        echo"<h1>". Auth::user()->name."</h1>";
        echo"<a href ='/logout'>Logout>></a>";
    }
}
