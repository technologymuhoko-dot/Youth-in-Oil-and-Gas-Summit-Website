<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function index()
    {
        return view('pages.recap');
    }

    public function gallery()
    {
        return view('pages.recap.gallery');
    }

    public function report()
    {
        return view('pages.recap.report');
    }

    public function info()
    {
        return view('pages.recap.info');
    }
}
