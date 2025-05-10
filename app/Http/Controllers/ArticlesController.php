<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Level;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ArticlesController extends Controller
{
    public function beginner()
    {
        // جلب كل المقالات
        $items = Articles::all();
        // لمنع الخطأ لغيرالمسجل
        $favoriteIds = Auth::check()
            ? Auth::user()->favoriteArticles()->pluck('article_id')->toArray()
            : [];
        return view('beginner', compact('items', 'favoriteIds'));
    }
    public function showCreateForm()
    {
         return view('article'); 
    }
    public function favBeginner()
    {
        $user = Auth::user();
        
        $favoriteIds = $user->favoriteArticles()
            ->where('levels_id', Level::where('Level','Beginner')->first()->id)
            ->pluck('article_id')->toArray();
        $get_items = Articles::where('levels_id', Level::where('Level','Beginner')->first()->id)
            ->get();
        return view('beginner', compact('get_items', 'favoriteIds'));
    }

    public function Create(Request $request)
    {
        // التحقق من المدخلات
        $validated = $request->validate([
            'title'       => 'required|string',
            'category'    => 'required|string',
            'description' => 'nullable|string|max:2000',
        ]);

        // بشكل افتراضي تصير مبتدئ
        $article = Articles::create([
            'Title'       => $validated['title'],
            'Categorie'   => $validated['category'],
            'Description' => $validated['description'] ?? '',
            'levels_id'   => 1,
        ]);

        return redirect()->route('beginner');
    }
}
