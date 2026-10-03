<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class Homepage extends Controller
{
    function index()
    {
        return view('homepage.index');
    }

    function about()
    {
        return view('homepage.about');
    }

    function services()
    {
        return view('homepage.services');
    }

    function contact()
    {
        return view('homepage.contact');
    }
}
