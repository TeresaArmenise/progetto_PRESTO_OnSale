<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{

    public function index()
    {
        $article_revisioned=Article::whereNotNull('is_accepted')->get()->last();
        $article_to_check=Article::where('is_accepted',null)
        ->where('user_id', '!=', Auth::id())
        ->orderBy('created_at', 'asc')
        ->first();
        return view('revisor.index', compact('article_to_check', 'article_revisioned'));
    }

    public function accept(Article $article)
    {
        if ($article->user_id === Auth::id()) {
            // Puoi scegliere di reindirizzare l'utente o lanciare un'eccezione
            return redirect()->back()->with('message', 'Non puoi revisionare i tuoi articoli.');
        }
        else {
        $article->setAccepted(true);
        return redirect()
        ->back()
        ->with('message', "Articolo accettato $article->title ");
    }
}

    public function reject(Article $article)
    {
        if ($article->user_id === Auth::id()) {
            // Puoi scegliere di reindirizzare l'utente o lanciare un'eccezione
            return redirect()->back()->with('message', 'Non puoi revisionare i tuoi articoli.');
        }
        else {
        $article->setAccepted(false);
        return redirect()
        ->back()
        ->with('rejectMessage', "Hai rifiutato l'articolo : $article->title");
    }
}
    
    public function becomeRevisor(Request $request) {
        $email = $request->email;
        $name = $request->name;
        $phone = $request->phone;
        $cv = $request->file('cv')->store('public/allegati');
        $user = compact('email', 'name', 'phone', 'cv');

        try {
            // Invia l'email all'amministratore
            Mail::to('giam2510@gmail.com')->send(new BecomeRevisor($user));
            Mail::to('barbaronico93@gmail.com')->send(new BecomeRevisor($user));

            //!! Creare mail per utente candidato
            
    
            // Esegui il comando per rendere l'utente un revisore
            Artisan::call('app:make-user-revisor', [
                'email' => $email
            ]);
    
        } catch (\Exception $e) {
            dd($e);
            return redirect(route('home'))->with('message', 'Ci scusiamo per il disagio, si stanno verificando dei problemi, riprova più tardi');
        }
    
        return redirect(route('home'))->with('message', 'La tua richiesta è stata inviata');
    }
    public function WorkWithUs(){
        return view('workwithus');
    }

    public function undo(Article $article){
        $article->setAccepted(null);
        return redirect()
        ->back()
        ->with('warning', "Hai annullato l'ultima modifica");
    }

}
