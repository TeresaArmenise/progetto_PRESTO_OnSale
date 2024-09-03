<x-layout>
    <x-nav />

        <div class="container marginCustom">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="mt-5"> {{__('ui.prof_of')}} <div class="fst-italic colorCustom mt-2">{{Auth::user()->name}}</div> </h1>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-6 text-center shadow rounded-pill py-5 border border-info-subtle">
                    <img src="https://picsum.photos/900" class="rounded-circle mb-2" alt="Foto di profilo {{$user->name}}" width="90rem">
                    <h3>{{__('ui.Name')}}: {{$user->name}}</h3>
                    <h4>{{__('ui.email')}}: {{$user->email}}</h4>
                    <h5 class="fst-italic">{{__('ui.Registered')}}: {{$user->created_at->format('d/m/y')}} </h5>
                    {{-- <form action="" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger fw-bold mt-3">Elimina Profilo</button>
                    </form> --}}
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-6">{{__('ui.My_articles')}}:</h2>
                </div>
                @foreach ($articles as $article)
                <div class="col-10 col-md-4">
    
                <x-userCard

                :article="$article"

                />


                </div>
                @endforeach
                
                    
                
            </div>
        </div>


    </x-layout>