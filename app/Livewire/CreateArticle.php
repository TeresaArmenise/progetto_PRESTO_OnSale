<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreateArticle extends Component
{
    #[Validate('required', message: 'Il campo titolo è richiesto')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 5 caratteri')]

    public $title;
    #[Validate('required', message: 'Il campo descrizione è richiesto')]
    #[Validate('min:10', message: 'La descrizione deve avere almeno 10 caratteri')]
    public $description;
    #[Validate('required', message: 'Il campo prezzo è richiesto')]
    #[Validate('numeric', message: 'Il prezzo deve essere un numero')]
    public $price;
    #[Validate('required', message: 'Seleziona una categoria')]
    public $category;
    public $article;
    
    
    
    public function save(){
        
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id'=> Auth::id()
           

        ]);
        /*  $this->cleanForm(); */

        // dd($this->article);
        $this->title= '';
        $this->description= '';
        $this->category= '';
        $this->price= '';
        session()->flash('message', 'Creazione articolo avvenuta con successo');
       
       
        
        



        return redirect()->to('/');
    }
    
    public function render()
    {
        return view('livewire.create-article');
    }
}



