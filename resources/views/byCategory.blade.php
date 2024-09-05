<x-layout>
    
    <x-nav/>
    <div class="container marginCustom">
        <div class="row text-center justify-content-evenly">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="marginTop marginTop1280">{{__("ui.$category->name")}}</h1>
            </div>
            @forelse ($articles as $article)
            <div class= "col-12 col-md-4 mt-5 d-flex justify-content-evenly">
                <x-card :article="$article" />
            </div>
            
            @empty
            <div class="col-12 mt-5">
                <h3>{{__('ui.No_Art')}}</h3>
            </div>
            @auth
            <div class="col-6 mt-5 mx-auto">
                <a class="btn colorBtn" href="{{route('create')}}">+ {{__('ui.Add_Art')}}</a>
            </div>
            @endauth
            @endforelse 
        </div>
    </div>
</x-layout>

