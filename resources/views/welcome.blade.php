<x-layout>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-0">
        <div class="container-fluid bg-dark custom">
            <img src="media\LogoNavBgNone.png" alt="Logo" width="100">
            {{-- <a class="navbar-brand" href="#">Mouri</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex w-100 justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            @guest
                <div class="me-3">
                    <a class="text-decoration-none text-light fst-italic" href="{{route('login')}}">Accedi</a>
                </div>
                <div>
                    <a class="text-decoration-none text-light fst-italic" href="{{route('register')}}">Registrati</a>
                </div>
            @else
                <div>
                    <a class="text-decoration-none text-light fst-italic" href="{{route('logout')}}">Esci</a>
                </div>
            @endguest
        </div>
    </nav>
    
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

    <div class="link-area frame">
        <button href="{{route('index')}}" class="custom-btn btn-16" target="_blank">Esplora</button>
    </div>

    
    
    
    
    
    {{-- CONTAINER PER CARDS  --}}
    
    <div class="container">
        <div class="row">
            <div class="col-6 mb-5 text-center">
                {{-- @auth --}}
                <a href="{{route('create')}}" type="button" class="btn btn-primary">Aggiungi Articolo</a>
                {{-- @endauth --}}
            </div>
            <div class="col-6 text-center fst-italic">
                @forelse ($articles as $article)
                <div class= "col-12 col-md-3 mt-5">
                    <x-card :article="$article" />
                </div>
                
                @empty
                <div class="col-6">
                    <h3>Non sono ancora stati creati articoli</h3>
                </div>
                @endforelse 
            </div>
        </div>
    </div>
    
    
</x-layout>