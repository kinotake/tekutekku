<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WolkController extends Controller
{
    public function postKeyword(Request $request)
    {   
        $keyword = $request->input('keyword');

        return view('searched', compact('keyword'));
    }

}
