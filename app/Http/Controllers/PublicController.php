<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Middleware\IsRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;


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

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function adminArea() {
        $revisors_requested=User::where('mail_sent', true)
        ->where('is_revisor', false)
        ->get();
        $revisors_in_charge=User::where('is_revisor', true)->where('mail_sent', true)->get();
        $article_revisioned=Article::whereNotNull('is_accepted')->get();
        return view('admin', compact( 'article_revisioned', 'revisors_requested', 'revisors_in_charge'));
    }

    public function approveRevisor($revisor) {       
        Artisan::call('app:make-user-revisor', [
            'email' => $revisor
        ]);

        return redirect()
        ->back()
        ->with('approve', "Hai promosso revisore l'utente con mail : $revisor");
    }

    public function downgrade(User $revisor){

        // $revisor = User::find($revisorId);

        $revisor->downgradeRevisor(false);

        return redirect()
        ->back()
        ->with('downgrade', "Hai rimosso il revisore con mail : ");
        // $user->name"
    }
    public function destroyProfile()
    {
        $userArticles = Auth::user()->articles;
        foreach ($userArticles as $article) {
            $article->update([
                'user_id' => NULL,
            ]);
        }
        
        Auth::user()->delete();
        
        Auth::logout();

        return redirect('/')->with('deleteProfile', 'Il tuo profilo è stato eliminato con successo.');
    }
}