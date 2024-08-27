<x-layout>
    <x-nav />
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">WELCOME TO PRESTO</h1>
            </div>
        </div>
    </div>

    {{-- @auth --}}
    <a href="{{route('create')}}" type="button" class="btn btn-primary">Aggiungi Articolo</a>
    {{-- @endauth --}}
    <div>
        
        @forelse ($articles as $article)
             <div class= "col-12 col-md-3">
            <x-card :article="$article" />
        </div>

        @empty
            <div class="col-12">
                <h3>Non sono ancora stati creati articoli</h3>
            </div>
        @endforelse 
       
    </div>
</x-layout>