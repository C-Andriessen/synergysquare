<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function startupIndex()
    {
        return view('pages.startup.index');
    }
}
