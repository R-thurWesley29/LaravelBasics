<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $nama = "Laravel 12";
        return view('home',compact('nama'));
    }

    public function halo($nama)
    {
        $nama = "Veeronica";
        return"Halo, $nama";
    }

    public function tentang() 
    {
        return view ('tentang');
    }

}

