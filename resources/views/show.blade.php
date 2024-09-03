<x-layout>
    <x-nav/>
    <div class="container marginCustom">
        <div class="row height-custom justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
                {{-- <h1> {{ $article->title }}</h1> --}}
            </div>
        </div>
    </div>
    
    <div class="container marginCustom">
        <div class="row no-wrap">
            <div class="col-sm-6">
                
                @if($article->images->count() > 0)
                <div id="carouselExampleIndicatorsFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach($article->images as $key => $image)
                        <button type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide-to="{{ $key }}" class="@if($loop->first) active @endif" aria-current="@if($loop->first) true @endif" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    
                    <div class="carousel-inner">
                        @foreach($article->images as $key => $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                        </div>
                        @endforeach
                    </div>
                    
                    @if($article->images->count() > 1)
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
            <div class="col-sm-6 d-flex flex-column justify-content-center align-items-center">
                <h2>{{$article->title}}</h2>
                <h4>{{$article->category['name']}}</h4>
                <p>{{$article->description}}</p>
                <p>€ {{$article->price}}</p>
                
            </div> <!-- /col-sm-6 -->
        </div> <!-- /row -->
    </div> <!-- /container -->
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="col-6 mt-5 text-start">
                    <a class="btn colorBtn " href="{{route('home')}}">{{__("ui.Return_Home")}}</a>
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>