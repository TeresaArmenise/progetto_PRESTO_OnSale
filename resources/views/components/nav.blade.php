<nav class="navbar navbar-expand-lg navbar-light fixed-top py-0">
    <div class="container-fluid bg-dark custom">
        <div class="pe-5 me-5">
            <img src=" {{ asset('media/LogoNavBgNone.png') }}" href="{{route('home')}}" alt="Logo" width="100" class="me-5">
        </div>
        {{-- <a class="navbar-brand" href="#">Mouri</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="w-100">
                <ul class="navbar-nav">
                    <div class="d-flex ps-5 w-100 align-items-center justify-content-center">
                        <li class="nav-item me-5">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item ps-4 me-5 ">
                            <a class="nav-link" href="{{route('index')}}">Articoli</a>
                        </li>
                        <li class="nav-item dropdown paddingDropdown">
                            <div class="text-center">
                                <a class="dropbtn text-decoration-none dropdown-toggle">Categorie</a>
                                <div class="dropdown-content marginDropdown">
                                    @foreach ($categories as $category)
                                    <a class="px-4 py-2" href="{{route('byCategory', ['category'=> $category])}}">{{$category->name}}</a>
                                    @if (!$loop->last)
                                    <hr class="dropdown-divider">
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        
        <div class="">
            <form class="d-flex align-items-center justify-content-end px-3" role="search" action="{{route('search')}}">
                <input class="form-control me-0 searchInput w-50 h-50 rounded-pill" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn colorBtn py-1 px-3 rounded-pill mx-2" type="submit"><i class="bi bi-search"></i></button>
            </form> 
        </div>
        @guest
        <div class="me-3">
            <a class="text-decoration-none text-light fst-italic" href="{{route('login')}}">Accedi</a>
        </div>
        <div>
            <a class="text-decoration-none text-light fst-italic" href="{{route('register')}}">Registrati</a>
        </div>
        @else
        
        
        {{-- DA IMPLEMENTARE CON SEZIONE PROFILO  --}}
        <div class="dropdown pe-5">
            <div class="text-center pt-3">
                <a class="dropbtn text-decoration-none">Ciao <div class="text-decoration-none dropdown-toggle colorCustom">{{Auth::user()->name}}</div></a>
                <div class="dropdown-content">
                    @if (Auth::user()->is_revisor)
                    <a href="{{route('revisor.index')}}" class="position-relative">Zona revisione</a>
                    <span class="position-absolute badgePosition badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                    @endif
                    <a href="{{route('profile')}}">Profilo</a>
                    <a href="{{route('myArticles')}}">I miei articoli</a>
                    
                    {{-- @if (Auth::user()->is_admin) --}}
                    {{-- DA IMPLEMENTARE  --}}
                    
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <div class="text-center">
                            <button class="text-white fw-bold colorBtn fst-italic">Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            @endguest   
            <div class="dropdown">
                <div class="text-end mx-0">
                    <a class="dropbtn text-decoration-none dropdown-toggle"><x-_locale lang="it" /></a>
                    <div class="dropdown-content">
                        <x-_locale lang="en" />
                        <x-_locale lang="es" />
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>