<x-layout>
    <x-nav/>
        <div class="container marginCustom">
            <div class="row"> 
                <div class="col-12 text-center mb-5">
                    <h1 class="display-6">Risultati della ricerca:</h1>
                    <span class="fst-italic fs-2 capitalize">{{ ucfirst($query) }}</span>
                </div>
            </div>
        </div>
        
        {{-- CARD  --}}
        <div class="container">
            <div class="row justify-content-evenly">  
                @forelse ($articles as $article)
                <div class= "col-12 col-md-4 d-flex justify-content-evenly my-3">
                    <x-card 
                    :article="$article"
                    />
                </div>
                
                @empty
                <div class="col-6 text-center">
                    <h3>Non sono ancora stati creati articoli</h3>
                </div>
                @endforelse 
            </div>
        </div>
        <div>
            {{ $articles->links() }}
        </div>
</x-layout>