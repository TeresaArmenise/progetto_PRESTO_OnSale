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
                <img class="d-block w-100" src="media\Gaming.webp" alt="Second slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-light text-end">TECNOLOGIA E GAMING</h5>
                    <p class="fst-italic text-light text-end w-100">Esplora la sezione per scopire le ultime novità</p>
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
    
    @auth
    <div class="link-area frame">
        <a href="{{route('create')}}">
            <button  class="custom-btn btn-11">+ Aggiungi Articolo<div class="dot"></div></button>
        </a>
    </div>
    @endauth
    
    {{-- VARIAZIONE  --}}
    
    <div class="container mb-5">
        <div class="row"> 
            <div class="col-12 text-center">
                <p class="display-6">LE NOSTRE CATEGORIE</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-evenly">  
            <div class="card-container">
                <div class="card-header">
                    Esplora le nostre categorie
                </div>
                <div class="card-grid">
                    <img src="oggarrmus\23ai-24-bottles-clima-bottle-050galileo.jpg" alt="CatArredo">
                    <img src="oggarrmus\GAGB28FVEW-1.jpg" alt="CatArredo">
                    <img src="oggarrmus\Diego-Chair-scaled.jpg" alt="CatArredo">
                    <img src="oggarrmus\Closet-Libano-3-cuerpos-3.jpg" alt="CatArredo">
                </div>
                <div class="card-footer">
                    <a href="#">Vedi tutti i prodotti</a>
                </div>
            </div>
            <div class="card-container">
                <div class="card-header">
                    Esplora le nostre categorie
                </div>
                <div class="card-grid">
                    <img src="oggarrmus\oggettistica-tp-17-orologio-da-muro-tondo-con-pannello-posteriore-spettacolo-shop-for-store.webp" alt="Catogg">
                    <img src="oggarrmus\oggettistica-swarovski-idyllia.jpg" alt="Catogg">
                    <img src="oggarrmus\Oggettistica_vasi4-1024x683.jpg" alt="Catogg">
                    <img src="oggarrmus\23ai-24-bottles-clima-bottle-050galileo.jpg" alt="Catogg">
                </div>
                <div class="card-footer">
                    <a href="#">Vedi tutti i prodotti</a>
                </div>
            </div>
            <div class="card-container">
                <div class="card-header">
                    Esplora le nostre categorie
                </div>
                <div class="card-grid">
                    <img src="oggarrmus\oggettistica-tp-17-orologio-da-muro-tondo-con-pannello-posteriore-spettacolo-shop-for-store.webp" alt="Catogg">
                    <img src="oggarrmus\oggettistica-swarovski-idyllia.jpg" alt="Catogg">
                    <img src="oggarrmus\Oggettistica_vasi4-1024x683.jpg" alt="Catogg">
                    <img src="oggarrmus\23ai-24-bottles-clima-bottle-050galileo.jpg" alt="Catogg">
                </div>
                <div class="card-footer">
                    <a href="#">Vedi tutti i prodotti</a>
                </div>
            </div>
        </div>
    </div>
            
            {{-- END  --}}
            
            {{-- CONTAINER PER CARDS  --}}
            
            <div class="container marginCustom">
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
            <x-footer />
            
        </x-layout>