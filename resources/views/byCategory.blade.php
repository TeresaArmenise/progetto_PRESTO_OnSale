<x-layout>

    <x-nav/>
    <div class="container marginCustom">
        <div class="row text-center">
            <div class="col-12">
                <h1>{{$category->name}}</h1>
            </div>
            @forelse ($category->articles as $article)
            <div class= "col-12 col-md-3 mt-5 d-flex justify-content-evenly">
                <x-card :article="$article" />
            </div>
                
            @empty
            <div class="col-12 mt-5">
                <h3>Non sono ancora stati creati articoli</h3>
            </div>
            @auth
            <div class="col-6 mt-5 mx-auto">
                <a class="btn btn-outline-danger" href="{{route('create')}}">Pubblica il tuo articolo</a>
            </div>
            @endauth
            @endforelse 
        </div>
    </div>
</x-layout>

