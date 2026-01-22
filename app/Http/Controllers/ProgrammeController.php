<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
        // Optional: Could redirect to /programme/schedule or show a brief overview
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
