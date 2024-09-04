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
                <img class="d-block w-100 slideCarousel" src="media\TVAnnuncio.png" alt="First slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-dark">{{__('ui.title_carousel')}}</h5>
                    <p class="fst-italic text-dark text-start">{{__('ui.undertitle_carousel')}}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 slideCarousel" src="media\Gaming.webp" alt="Second slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-light text-end">{{__('ui.title_carousel_2')}}</h5>
                    <p class="fst-italic text-light text-end w-100">{{__('ui.undertitle_carousel_2')}}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 slideCarousel" src="media\Annuncio1.png" alt="Third slide">
                <div class="carousel-caption d-flex flex-column justify-content-center pb-5">
                    <h5 class="text-dark">{{__('ui.title_carousel_3')}}</h5>
                    <p class="fst-italic text-dark text-start">{{__('ui.undertitle_carousel_3')}}</p>
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
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }} 
            </div>
        </div>       
    </div>
    @endif
    @if (session()->has('errorMessage'))
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-5 alert alert-danger text-center shadow rounded">
                {{ session('errorMessage') }}
            </div>
        </div> 
    </div>        
    @endif
    
    @auth
    <div class="link-area frame">
        <a href="{{route('create')}}">
            <button  class="custom-btn btn-11">+ {{__('ui.Add_Art')}}<div class="dot"></div></button>
        </a>
    </div>
    @endauth
    
    {{-- VARIAZIONE  --}}
    
    <div class="container my-5">
        <div class="row"> 
            <div class="col-12 text-center">
                <p class="display-6">{{__('ui.Our_Cat')}}</p>
            </div>
        </div>
    </div>
    
    {{-- @dd($categories) --}}
    
    <div class="container">
        <div class="row justify-content-evenly gap-3">  
            @foreach ($categories as $category)
            <div class="col-6 col-md-3 col-lg-2 customCard">
                
                <x-categoryCard 
                :category="$category"
                />
                
            </div>
            @endforeach
        </div>
    </div>
    
    {{-- END  --}}
    
    {{-- CONTAINER PER CARDS  --}}
    
    <div class="container marginCustom">
        <div class="row"> 
            <div class="col-12 text-center">
                <p class="display-6">{{__('ui.Our_Prodc')}}</p>
            </div>
        </div>
    </div>
    
    {{-- CARD  --}}
    <div class="container">
        <div class="row justify-content-evenly">  
            @forelse ($articles as $article)
            <div class= "col-8 col-md-6 d-flex justify-content-evenly my-3">
                <x-welcomeCard 
                :article="$article"
                />
            </div>
            
            @empty
            <div class="col-6 text-center">
                <h3>{{__('ui.No_Art')}}</h3>
            </div>
            @endforelse 
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</x-layout>