<?php

namespace App\Livewire;

use Livewire\Component;

class CreateArticle extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;

    public function render()
    {
        return view('livewire.create-article');
    }
}
