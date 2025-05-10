<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ReadariController extends Controller
{
    public function about()
    {
        return view('aboutus');
    }
}

