<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function haze()
    {
        return view('haze');
    }

    public function hazehall()
    {
        return view('hazehall');
    }
}
