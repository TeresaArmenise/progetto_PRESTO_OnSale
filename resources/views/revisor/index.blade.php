<x-layout>
    <x-nav/>
    <div class="container-fluid marginCustom px-5">
        <div class="row px-5">
            <div class="col-12 text-center mb-5">
                <div class="rounded shadow bg-dark mt-5">
                    <h1 class="text-light">Area del revisore</h1>
                </div>
            </div>
            <div class="col-12 text-center ps-5 pe-4">
                <button type="submit" class="btn btnAnnulla fw-bold m-0 p-3"> Annulla l'ultima azione </button>
        </div>
        </div>
    </div>
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
    @if ($article_to_check)
    <div class="row justify-content-end marginCustom">
        <div class="col-md-6">
            <div class="row justify-content-center">
                @for ($i = 0; $i < 1; $i++)
                <div class="col-6 ocl-md-4 mb-4 text-center">
                    <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="immagine segnaposto">
                </div>
                @endfor
            </div>
        </div>
        <div class="col-md-6 ps-4 d-flex flex-column justify-content-between">
            <div>
                <h1>{{$article_to_check->title}}</h1>
                <h3>Atutore: {{$article_to_check->user->name}}</h3>
                <h4>{{$article_to_check->price}} €</h4>
                <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
                <p class="h6">{{$article_to_check->description}}</p>
            </div>
            <div class="d-flex pb-4 justify-content-start">
                <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-3 px-3 fw-bold">Rifiuta</button>
                </form>
                <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success py-3 px-3 fw-bold">Accetta</button>
                </form>
            </div>
        </div>
    </div>
    @endif

    @if (!$article_to_check)
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="fst-italic display-4 marginCustom">
                Nessun articolo da revisionare
            </h1>
        </div>
    </div>
    @endif
    @if ($article_revisioned)
    <form action="{{route('undo', ['article' => $article_revisioned])}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mt-5 ps-5">
                    <a href="{{route('home')}}" class="my-5 btn colorBtn p-3 px-4">Torna all'homepage</a>
                </div>
            </div>
        </div>
    </form>
    @endif
</div>

</x-layout>