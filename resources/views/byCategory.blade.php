<x-layout>
   
    <x-nav/>
    <div class="container">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Articoli della categoria <span>{{$category->name}}</span></h1>
            </div>
        </div>
    </div>
    <div class="col-6 text-center fst-italic">
        @forelse ($category->articles as $article)
        <div class= "col-12 col-md-3 mt-5">
            <x-card :article="$article" />
        </div>
        
        @empty
        <div class="col-6 mt-5">
            <h3>Non sono ancora stati creati articoli</h3>
        </div>
        @auth
            <a class="btn btn-danger" href="{{route('create')}}">Pubblica il tuo articolo</a>
        @endauth
        @endforelse 
    </div>
</x-layout>