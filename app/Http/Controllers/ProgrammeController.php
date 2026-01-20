<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
       
        return redirect('/programme/schedule');
    }

    public function schedule()
    {
        return view('pages.programme.schedule');
    }

    public function callForPapers()
    {
        return view('pages.programme.call-for-papers');
    }
}
