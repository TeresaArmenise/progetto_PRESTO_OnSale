<x-layout>
    <x-nav/>
    <div class="container-fluid marginCustom px-5">
        <div class="row px-5">
            <div class="col-12 text-center mb-5">
                <div class="rounded shadow bg-dark mt-5">
                    <h1 class="text-light">{{__('ui.revisor_area')}}</h1>
                </div>
            </div>
            
            {{-- IF PER ANNULLA ULTIMA OPERAZIONE  --}}
            
            @if ($article_revisioned)
            <form action="{{route('undo', ['article' => $article_revisioned])}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center ps-5 pe-4 mb-5">
                            <button type="submit" class="btn btnAnnulla fw-bold m-0 p-3"> {{__('ui.cancel_last')}} </button>
                        </div>
                    </div>
                </div>
            </form>
            @endif  
        </div>
    </div>
    
    {{-- IF MESSAGGI IN INDEX  --}}
    
    @if (session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('message') }} 
        </div>
    </div>
    @endif
    @if (session()->has('rejectMessage'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-danger text-center shadow rounded">
            {{ session('rejectMessage') }} 
        </div>
    </div>
    @endif
    @if (session()->has('warning'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-warning text-center shadow rounded">
            {{ session('warning') }} 
        </div>
    </div>
    @endif
    
    {{-- IF SE CI SONO ARTICOLI DA VERIFICARE --}}
    
    <div class="container marginCustom">
        <div class="row no-wrap">
            <div class="col-sm-6 p-0">
                @if ($article_to_check)
                @if($article_to_check->images->count() > 0)
                <div id="carouselExampleIndicatorsFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach($article_to_check->images as $key => $image)
                        <button type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide-to="{{ $key }}" class="@if($loop->first) active @endif" aria-current="@if($loop->first) true @endif" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    
                    <div class="carousel-inner">
                        @foreach($article_to_check->images as $key => $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}">
                        </div>
                        @endforeach
                    </div>
                    
                    @if($article_to_check->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">{{ __("ui.Prev") }}</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">{{ __("ui.Next") }}</span>
                    </button>
                    @endif
                </div>
                @else
                <img src="https://picsum.photos/303" alt="Nessuna foto inserita dall'utente">
                @endif
                </div>
                <div class="col-sm-6 d-flex flex-column justify-content-center align-items-center mt-3">
                    <h2>{{$article_to_check->title}}</h2>
                    <h4>{{$article_to_check->category['name']}}</h4>
                    <p>{{$article_to_check->description}}</p>
                    <p>€ {{$article_to_check->price}}</p>
                </div>
                <div class="d-flex pb-4 justify-content-center">
                    <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-3 px-3 fw-bold">{{__('ui.Reject')}}</button>
                    </form>
                    <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-3 px-3 fw-bold">{{__('ui.Accept')}}</button>
                    </form>
                </div>
            </div>
        </div>
    
    
        
        {{-- SE NON CI SONO ARTICOLI DA VERIFICARE  --}}
        
        @else
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="fst-italic display-4 marginCustom">
                    {{__('ui.No_Art_to_check')}}
                </h1>
            </div>
        </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mt-5 ps-5">
                    <a href="{{route('home')}}" class="my-5 btn colorBtn p-3 px-4">{{__('ui.Return_Home')}}</a>
                </div>
            </div>
        </div>
        
    </x-layout>