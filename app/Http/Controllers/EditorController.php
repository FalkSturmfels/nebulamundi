<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditorController extends Controller
{

    public function start()
    {
        return view('editor');
    }

    public function show(Request $request)
    {
        $html = $request->html;
        return view('editorresult', compact('html'));
    }
}
