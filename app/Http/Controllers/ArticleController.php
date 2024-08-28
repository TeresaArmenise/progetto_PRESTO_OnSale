<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ArticleController extends Controller
{
    public function create(){
        return view('createArticle');
    }

    public function index(){
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('index', compact('articles'));
    }
    public function show(Article $article){
    
        return view('show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('byCategory', compact('category', 'articles'));
    }

}
