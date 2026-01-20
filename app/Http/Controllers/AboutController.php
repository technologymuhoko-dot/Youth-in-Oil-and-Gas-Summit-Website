<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return redirect('/about/whywalvisbay');
    }

    // ABOUT > Why Walvis Bay?
    public function whyWalvisBay()
    {
        return view('pages.about.whywalvisbay');
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
