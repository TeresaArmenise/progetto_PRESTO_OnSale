<nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
    <div class="container-fluid">
        <img src="media\PrestoLogov.3.png" alt="Logo" width="120">
        {{-- <a class="navbar-brand" href="#">Presto</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-evenly">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Tutti gli articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                
            </ul>
            
        </div>
        @guest
        <div class="me-3">
            <a href="{{route('login')}}">Accedi</a>
        </div>
        <div>
            <a href="{{route('register')}}">Registrati</a>
        </div>
        @else
        <div>
            <a href="{{route('logout')}}">Esci</a>
        </div>
        @endguest
        
        
    </div>
</nav>