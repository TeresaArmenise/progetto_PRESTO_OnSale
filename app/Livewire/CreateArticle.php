<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Models\Article;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $images = [];
    public $temporary_images;

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
        

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                // vecchio codice
                // dispatch(new ResizeImage($newImage->path, 300, 300));
                // nuovo codice
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
        
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

                
            $this->title= '';
            $this->description= '';
            $this->category= '';
            $this->price= '';
            $this->images = [];
        

       

        session()->flash('message', 'Creazione articolo avvenuta con successo');
     
        return redirect()->to('/');
    }
    
    public function render()
    {
        return view('livewire.create-article');
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images'=>'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    
    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
}



