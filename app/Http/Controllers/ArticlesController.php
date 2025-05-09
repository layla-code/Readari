<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Articles;
use Illuminate\Support\Str;
class ArticlesController extends Controller
{
    public function beginner (){

        $get_items=Articles::All();
        return view('beginner',['add'=>$get_items]);
    }

    public function article (){

        return view('article');
    }

    public function Create(request $request){
        #dd($request);

        $validated = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'nullable|string|max:2000'
        ]);

        $arr=[
            'Title'=>$request->title,
            'Categorie'=>$request->category,
            'Description'=>$request->description
        ];

        $Fields=Articles::Create($arr);
        $Fields->save();

        return redirect()->route('beginner');
    } 
}
