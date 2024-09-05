<x-layout>
    <x-nav />

        <div class="container marginCustom">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mt-5"> {{__('ui.All_Art_of')}} <div class="fst-italic colorCustom mt-2">{{Auth::user()->name}}</div> </h1>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
            
                @foreach ($articles as $article)
                <div class="col-3 m-3">
                    <x-userCard 
                    
                    :article='$article'

                    />

                </div>
                @endforeach
            </div>
        </div>


</x-layout>