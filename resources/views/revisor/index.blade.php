<x-layout>
    <x-nav/>
    <div class="container-fluid marginCustom px-5">
        <div class="row px-5">
            <div class="text-center mb-5">
                <div class="rounded mt-5">
                    <h1 class="">{{__('ui.revisor_area')}}</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- IF MESSAGGI IN INDEX --}}
    @if (session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('message') }} 
        </div>
    </div>
    @endif

    @if (session()->has('rejectMessage'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-danger text-center shadow rounded">
            {{ session('rejectMessage') }} 
        </div>
    </div>
    @endif

    @if (session()->has('warning'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-warning text-center shadow rounded">
            {{ session('warning') }} 
        </div>
    </div>
    @endif

    {{-- IF SE CI SONO ARTICOLI DA VERIFICARE --}}
    @if ($article_to_check)
    <div class="container shadow rounded">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if($article_to_check->images->count() > 0)
                <div id="carouselExampleIndicatorsFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach($article_to_check->images as $key => $image)
                        <button type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide-to="{{ $key }}" class="@if($loop->first) active @endif" aria-current="@if($loop->first) true @endif" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                
                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        @foreach($article_to_check->images as $key => $image)
                        <div class="carousel-item @if($loop->first) active @endif h-100" data-key="{{ $key }}">
                            <div class="row">
                                <!-- Colonna Immagine -->
                                <div class="col-10">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}">
                                </div>
                    
                                <!-- Colonna Valutazioni AI -->
                                <div class="col-10 d-none mt-4" id="ratings-{{$key}}">
                                    <div class="card-body">
                                        <h5 class="fw-bold">{{__('ui.Ratings')}}</h5>
                                        <!-- Mostra le etichette dell'immagine (labels) -->
                                        @if($image->labels)                                        
                                            @foreach ($image->labels as $label)
                                                #{{$label}},
                                            @endforeach                                     
                                        @else
                                        <div class="fst-italic">{{__('ui.No_Labs')}}</div>
                                        @endif
                                        <!-- Valutazioni AI (contenuti espliciti, violenza, spoofing, ecc.) -->
                                        <div class="d-flex flex-column flex-wrap justify-content-evenly mt-3">
                                            <div>
                                                <strong>{{__('ui.Adult')}}:</strong> <span class="{{$image->adult}}"></span>
                                            </div>
                                            <div>
                                                <strong>{{__('ui.Violence')}}:</strong> <span class="{{$image->violence}}"></span>
                                            </div>
                                            <div>
                                                <strong>{{__('ui.Spoof')}}:</strong> <span class="{{$image->spoof}}"></span>
                                            </div>
                                            <div>
                                                <strong>{{__('ui.Racy')}}:</strong> <span class="{{$image->racy}}"></span>
                                            </div>
                                            <div>
                                                <strong>{{__('ui.Medical')}}:</strong> <span class="{{$image->medical}}"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                
                    <!-- Controlli per navigare nel carosello -->
                    @if($article_to_check->images->count() > 1)
                    <div>
                        <button class="carousel-control-prev-revisor" type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide="prev">
                            <i class="fa-solid fa-chevron-left fs-3"></i>
                        </button>
                        <button class="carousel-control-next-revisor" type="button" data-bs-target="#carouselExampleIndicatorsFade" data-bs-slide="next">
                            <i class="fa-solid fa-chevron-right fs-3"></i>
                        </button>
                    </div>
                    @endif
                </div>
                @else
                <img src="https://picsum.photos/303" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>

            
            <div class="col-6 col-md-3 d-flex flex-column justify-content-center align-items-center mt-3">
                <div class="text-start">
                    <h3>{{$article_to_check->title}}</h3>
                    <h4>{{$article_to_check->category['name']}}</h4>
                    <p class="fst-italic">{{$article_to_check->description}}</p>
                    <h4 class="fw-bold text-success">€ {{$article_to_check->price}}</h4>
                </div>
            </div>
            
        </div>

        <div class="d-flex pb-4 justify-content-center">
            <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-danger py-3 px-3 fw-bold">{{__('ui.Reject')}}</button>
            </form>
            <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-success py-3 px-3 fw-bold">{{__('ui.Accept')}}</button>
            </form>
        </div>
    </div>
    {{-- IF PER ANNULLA ULTIMA OPERAZIONE --}}
    @if ($article_revisioned)
    <form action="{{route('undo', ['article' => $article_revisioned])}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center ps-5 pe-4 mb-5 mt-5">
                    <button type="submit" class="btn btnAnnulla fw-bold m-0 p-3 me-3"> {{__('ui.cancel_last')}}  <i class="bi bi-arrow-counterclockwise"></i> </button>
                </div>
            </div>
        </div>
    </form>
    @endif 
    @else
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="fst-italic display-4 marginCustom">{{__('ui.No_Art_to_check')}}</h1>
            </div>
        </div>
    </div>
    @endif
</x-layout>