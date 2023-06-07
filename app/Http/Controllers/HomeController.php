<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Toko Alponsus';

        return view('home', ['pageTitle' => $pageTitle]);
    }
}
