<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('indexu');
    }

    public function about()
    {
        return view('about');
    }

    public function tracklist()
    {
        return view('tracklist');
    }

    public function merch()
    {
        return view('merch');
    }

    public function produk()
    {
        return view('produk');
    }

    public function merch1()
    {
        return view('merch1');
    }
}

