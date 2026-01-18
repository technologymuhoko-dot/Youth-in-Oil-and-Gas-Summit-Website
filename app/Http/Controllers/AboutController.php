<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }

    // ABOUT > Why Walvis Bay?
    public function whyWalvisBay()
    {
        return view('pages.about.why-walvis-bay');
    }

    // ABOUT > Why Now?
    public function whyNow()
    {
        return view('pages.about.why-now');
    }

    // ABOUT > Welcome
    public function welcome()
    {
        return view('pages.about.welcome');
    }

    // ABOUT > Advisory Board
    public function advisoryBoard()
    {
        return view('pages.about.advisory-board');
    }
}
