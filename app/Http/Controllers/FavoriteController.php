<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Articles;

class FavoriteController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
        $favorites = $user->favoriteArticles; // علاقة Many-to-Many من user
        return view('favorites.index', compact('favorites'));
    }

    public function store($articleId)
    {
    $user = Auth::user();

    $alreadyExists = $user->favoriteArticles()->where('article_id', $articleId)->exists();

    if (!$alreadyExists) {
        $user->favoriteArticles()->attach($articleId);
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Article added to favorites',
    ], 200);
    }


    
    public function destroy($articleId)
    {
    $user = Auth::user();
    $user->favoriteArticles()->detach($articleId);

    return response()->json([
        'status'  => 'success',
        'message' => 'Article removed from favorites',
    ], 200);
    }

}


