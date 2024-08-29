<x-layout>
    
    <x-nav/>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="media\TVAnnuncio.png" alt="First slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-dark">SOLUZIONI PER L'ARREDO</h5>
                    <p class="fst-italic text-dark text-start">Esplora la nostra sezione di arredamente e oggetti di design</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="media\GamingWeek.jpg" alt="Second slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-light text-center">TECNOLOGIA E GAMING</h5>
                    <p class="fst-italic text-light m-auto">Esplora la sezione per scopire le ultime novità</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="media\Annuncio1.png" alt="Third slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-dark">LIBRI E OGGETTISTICA</h5>
                    <p class="fst-italic text-dark text-start">Puoi trovare tutto quello che serve per scuola e tempo libero</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    
    @if (session()->has('message'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }} 
            </div>
        </div>       
    </div>
    @endif
    @if (session()->has('errorMessage'))
    <div class="alert alert-danger fs-1 text-center">
        {{ session('errorMessage') }}
    </div>        
    @endif


    <div class="link-area frame">
        <button href="{{route('index')}}" class="custom-btn btn-16" target="_blank">Esplora</button>
    </div>
    
    
    
    
    
    
    <div class="link-area frame">
        <button href="{{route('index')}}" class="custom-btn btn-11">Esplora<div class="dot"></div></button>
    </div>
    
    
    
    
    
    
    {{-- CONTAINER PER CARDS  --}}
    
    <div class="container my-5">
        <div class="row"> 
            <div class="col-12 text-center">
                <p class="display-6">I nostri prodotti</p>
            </div>
        </div>
    </div>
    
    {{-- CARD  --}}
    <div class="container">
        <div class="row justify-content-evenly">  
            @forelse ($articles as $article)
            <div class= "col-12 d-flex justify-content-evenly my-3">
                <x-welcomeCard 
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                @auth
                <a href="{{route('create')}}" type="button" class="btn btn-outline-primary">+ Aggiungi Articolo</a>
                @endauth
            </div>
        </div>
    </div>

    <div class="col-12 w-100 text-center bg-dark">
        
        {{-- EFFETTO SCROLL DA IMPLEMENTARE  --}}
        <a href="" class="text-decoration-none"> Torna su </a>
    </div>
    <x-footer />

</x-layout>