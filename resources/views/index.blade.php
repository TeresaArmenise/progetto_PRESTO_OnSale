<x-layout>
    <x-nav />
    <div class="container marginCustom">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-4">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
    <div class="container marginCustom">
        <div class="row justify-content-center">
            @forelse ($articles as $article)
            <div class= "col-12 col-md-3 d-flex justify-content-evenly my-3">
                <x-card :article="$article" />
            </div>
            @empty  
            <div class="col-12">
                <h3>Non sono ancora stati creati articoli</h3>
            </div>
            @endforelse
            <div class="justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</x-layout>