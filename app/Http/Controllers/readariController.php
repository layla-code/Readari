<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class readariController extends Controller
{
    public function about (){
        return view('aboutus');
   }
   public function account (){
    return view('account');
}
}
