<nav class="navbar navbar-expand-lg fixed-top py-0 bg-dark">
    <div class="container-fluid">
        <div class="row w-100 d-flex align-items-center">

            {{-- COLONNA 1 X LOGO --}}
            <div class="col-12 col-md-12 customLogo col-lg-1 d-flex justify-content-center order-1 order-md-1 order-lg-1">
                <a href="{{route('home')}}">
                    <img src="{{ asset('media/LogoNavBgNone.png') }}" alt="Logo" class="img-fluid" style="max-width: 100px;">
                </a>
            </div>

            {{-- BUTTON TOGGLER --}}
            <div class="col-1 col-md-2 mx-3 d-flex justify-content-center order-2 order-md-2 order-lg-3 d-lg-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            {{-- COLONNA 2 X MENU --}}
            <div class="d-none d-sm-block d-md-none d-lg-block col-lg-4 mx-lg-5 order-lg-2">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- POSSO RIMUOVO GLI ID E CLASS NAVBAR-COLLAPSE VISTO CHE E' V.O. LG?  --}}
                    <ul class="navbar-nav d-flex justify-content-end align-items-center w-100">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('home')}}">{{__('ui.Home')}}</a>
                        </li>
                        <li class="nav-item ps-4">
                            <a class="nav-link text-light" href="{{route('index')}}">{{__('ui.Articles')}}</a>
                        </li>
                        <li class="nav-item dropdown paddingDropdown">
                            <a class="dropbtn text-decoration-none dropdown-toggle">{{__('ui.Categories')}}</a>
                            <div class="dropdown-content marginDropdown">
                                @foreach ($categories as $category)
                                    <a class="px-4 py-2 smallResponsive" href="{{route('byCategory', ['category'=> $category])}}"> {{__("ui.$category->name")}} </a>
                                    @if (!$loop->last)
                                        <hr class="dropdown-divider">
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- COLONNA 3 X SEARCH --}}
            <div class="col-7 col-md-6 col-lg-3 me-lg-0 mt-0 order-3 order-md-3 order-lg-3">
                <form class="d-flex align-items-center justify-content-end" role="search" action="{{route('search')}}">
                    <input class="form-control searchInput rounded-pill" type="search" placeholder="{{__('ui.Search')}}" aria-label="Search" name="query">
                    <button class="btn colorBtn py-1 px-2 rounded-pill mx-2" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>

            {{-- LOGIN & REGISTER --}}
            @guest
                <div class="col-2 customWidth col-lg-2 order-4 order-md-4 order-lg-4">
                    <div class="d-flex justify-content-evenly align-items-center">
                        <a class="text-decoration-none text-light fst-italic me-2 me-md-0" href="{{route('login')}}">{{__('ui.Access')}}</a>
                        <a class="text-decoration-none text-light fst-italic" href="{{route('register')}}">{{__('ui.Register')}}</a>
                    </div>
                </div>

            @else
                {{-- LOGGED-IN SECTION --}}
                <div class="col-2 customWidth col-lg-2 px-lg-4 mt-lg-3 d-flex justify-content-start order-4 order-md-4 order-lg-4">
                    <div class="dropdown text-center">
                        <a class="dropbtn text-decoration-none">{{__('ui.Hello')}} <div class="text-decoration-none dropdown-toggle colorCustom">{{Auth::user()->name}}</div></a>
                        <div class="dropdown-content">
                            @if (Auth::user()->is_revisor)
                            <a href="{{route('revisor.index')}}" class="position-relative smallResponsive">{{__('ui.revision_area')}}</a>
                            <span class="position-absolute badgePosition badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                            @endif
                            <a href="{{route('profile')}}" class="smallResponsive">{{__('ui.Profile')}}</a>
                            <a href="{{route('myArticles')}}" class="smallResponsive">{{__('ui.My_articles')}}</a>
                            @if (Auth::user()->is_admin)
                            <a href="{{route('adminArea')}}" class="smallResponsive">{{__('ui.Ad_Ar')}}</a>
                            @endif
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="text-white fw-bold colorBtn fst-italic smallResponsive">{{__('ui.logout')}}</button>
                            </form>
                        </div>
                    </div>
                </div>

            @endguest
            {{-- FLAGS LOGGED-IN --}}
            <div class="d-none d-sm-block order-md-5 col-1 text-end order-lg-5">
                <div class="dropdown dropdownLang mx-0">
                    <a id="currentLang" class="dropbtn text-decoration-none dropdown-toggle">
                        <x-_locale lang="it" />
                    </a>
                    <div class="dropdown-content-lang">
                        <a href="#" class="dropdown-item" data-lang="it" onclick="changeLang('it')"><x-_locale lang="it" /></a>
                        <a href="#" class="dropdown-item" data-lang="en" onclick="changeLang('en')"><x-_locale lang="en" /></a>
                        <a href="#" class="dropdown-item" data-lang="es" onclick="changeLang('es')"><x-_locale lang="es" /></a>
                    </div>
                </div>
            </div>

            {{-- COLONNA 2 X MENU  --}}
            <div class="col-12 order-5 d-lg-none px-0 ms-lg-5">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex text-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('home')}}">{{__('ui.Home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('index')}}">{{__('ui.Articles')}}</a>
                        </li>
                        <li class="nav-item py-0 ms-4 dropdown paddingDropdown">
                            <a class="dropbtn text-decoration-none dropdown-toggle">{{__('ui.Categories')}}</a>
                            <div class="dropdown-content marginDropdown">
                                @foreach ($categories as $category)
                                    <a class="px-4 py-2" href="{{route('byCategory', ['category'=> $category])}}"> {{__("ui.$category->name")}} </a>
                                    @if (!$loop->last)
                                        <hr class="dropdown-divider">
                                    @endif
                                @endforeach
                            </div>
                        </li>
                        <li class="text-end w-100 pb-2 d-md-none">
                            <div class="dropdown dropdownLang mx-0">
                                <a id="currentLang" class="dropbtn text-decoration-none dropdown-toggle">
                                    <x-_locale lang="it" />
                                </a>
                                <div class="dropdown-content-lang">
                                    <a href="#" class="dropdown-item" data-lang="it" onclick="changeLang('it')"><x-_locale lang="it" /></a>
                                    <a href="#" class="dropdown-item" data-lang="en" onclick="changeLang('en')"><x-_locale lang="en" /></a>
                                    <a href="#" class="dropdown-item" data-lang="es" onclick="changeLang('es')"><x-_locale lang="es" /></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

