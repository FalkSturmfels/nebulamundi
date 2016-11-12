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

    public function market()
    {
        return view('market');
    }

    public function masterhall()
    {
        return view('masterhall');
    }
}
