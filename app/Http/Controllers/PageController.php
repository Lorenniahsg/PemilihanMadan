<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function sawPage()
    {
        return view('sawPage');
    }

    public function fuzzyTopsis()
    {
        return view('fuzzyTopsis');
    }

    public function perbandingan()
    {
        return view('perbandingan');
    }
}
