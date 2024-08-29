<nav class="navbar navbar-expand-lg navbar-light fixed-top py-0">
    <div class="container-fluid bg-dark custom">
        <img src=" {{ asset('media/LogoNavBgNone.png') }}" alt="Logo" width="100" class="me-5">
        {{-- <a class="navbar-brand" href="#">Mouri</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex w-100 justify-content-center">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Index</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item text-dark" href="{{route('byCategory', ['category'=> $category])}}">{{$category->name}}</a></li>
                            @if (!$loop->last)
                            <hr class="dropdown-divider">
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <form class="d-flex align-items-center ms-4" role="search" action="{{route('search')}}">
                            <input class="form-control me-0 searchInput w-50 h-50 rounded-pill" type="search" placeholder="Search" aria-label="Search" name="query">
                            <button class="btn colorBtn py-1 px-3 rounded-pill" type="submit"><i class="bi bi-search"></i></button>
                        </form> 
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
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
            <a class="btn btn-success position-relative" href="{{route('revisor.index')}}">Zona revisione
                <span class="position-absolute top-0 start-100 badge translate-middle rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
            </a>
        </li>
        @endif
        
        <div>
            <div class="text-light text-wrap pe-4 text-center">Ciao <div class="fst-italic colorCustom">{{Auth::user()->name}}</div></div>
            
            {{-- DA IMPLEMENTARE CON SEZIONE PROFILO  --}}
            
        </div>
        {{-- <div> --}}
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn text-light fst-italic pe-2 hover">Esci</button>
            </form>
            {{-- </div> --}}
            @endguest
        </div>
    </nav>