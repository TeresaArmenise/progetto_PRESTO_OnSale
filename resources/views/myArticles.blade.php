<x-layout>
    <x-nav />

        <div class="container marginCustom">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="mt-5"> {{__('ui.All_Art_of')}} <div class="fst-italic colorCustom mt-2">{{Auth::user()->name}}</div> </h1>
                </div>
            </div>
        </div>
        @if (session()->has('deleteMessage'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-danger text-center shadow rounded">
                {{ session('deleteMessage') }} 
            </div>
        </div>
        @endif

        @if ($articles->isEmpty())
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h1 class="fst-italic display-4 marginCustom">Non sono stati ancora creati articoli.</h1>
                </div>
                <div class="col-4 mt-5">
                    <a href="{{route('create')}}">
                        <button  class="custom-btn btn-11">+ {{__('ui.Add_Art')}}<div class="dot"></div></button>
                    </a>
                </div>
            </div>
        </div>
        @else
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
        @endif

</x-layout>