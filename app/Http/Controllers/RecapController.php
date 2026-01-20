<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function index()
    {
        return redirect('/recap/gallery');
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
