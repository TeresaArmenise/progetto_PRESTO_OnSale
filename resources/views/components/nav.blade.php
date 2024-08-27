<nav class="navbar navbar-expand-lg navbar-light fixed-top py-0">
    <div class="container-fluid bg-dark custom">
        <img src=" {{ asset('media/LogoNavBgNone.png') }}" alt="Logo" width="100" class="me-5">
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
                        <a class="nav-link" href="{{route('index')}}">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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
                <div class="text-light text-wrap pe-4 text-center">Ciao <div class="fst-italic colorCustom">{{Auth::user()->name}}</div></div>

                {{-- DA IMPLEMENTARE CON SEZIONE PROFILO  --}}
                
            </div>
            <div>
                <a class="text-decoration-none text-light fst-italic pe-2 hover" href="{{route('logout')}}">Esci</a>
            </div>
        @endguest
    </div>
</nav>