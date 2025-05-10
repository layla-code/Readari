<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
   public function index()
{
    $user = Auth::user();
    $favorites = $user->favoriteArticles()->take(2)->get();

    return view('account', compact('user', 'favorites'));
}

}

