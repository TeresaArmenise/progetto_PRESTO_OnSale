<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ArticleController extends Controller
{
    public function create(){
        
        return view('createArticle');
    }

    public function store(Request $request){

        $article = Auth::user()->articles()->create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'user_id'=> Auth::user()->id
        ]);

        $article->categories()->sync($request->input('category_id'));

        return redirect(route('welcome'))->with('message', 'Creazione articolo avvenuta con successo');
    }
}
