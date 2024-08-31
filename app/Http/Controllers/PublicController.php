<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
    
        // Recupera le categorie con le immagini
        $categories = Category::all();
    
        return view('welcome', compact('articles', 'categories'));
    }
    

    public function search(Request $request) {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);

        return view('search', ['articles' => $articles, 'query' => $query]);
    }


    function profile(){

        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->orderBy('created_at','desc')->get();
        return view('auth/profile', compact('user','articles'));    
    }
}