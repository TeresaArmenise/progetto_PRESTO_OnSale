<x-layout>
    <x-nav/>
    <div class="container-fluid marginCustom px-5">
        <div class="row px-5">
            <div class="col-12 text-center mb-5">
                <div class="rounded shadow bg-dark mt-5">
                    <h1 class="text-light">{{__('ui.revisor_area')}}</h1>
                </div>
            </div>
            @if ($article_revisioned)
            <form action="{{route('undo', ['article' => $article_revisioned])}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center ps-5 pe-4 mb-5">
                            <button type="submit" class="btn btnAnnulla fw-bold m-0 p-3"> {{__('ui.cancel_last')}} </button>
                        </div>
                    </div>
                </div>
            </form>
            @endif  
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
    @if ($article_to_check->images->count())
    @foreach ($article_to_check->images as $key=>$image)
    <div class="col-6 col-md-4 mb-4">
        <img src="{{Storage::url($image->path)}}" class="img-fluid rounded shadow" alt="Immagine{{$key +1 }} dell'articolo {{$article_to_check->title}}">
    </div>
    @endforeach
    @else
    @for ($i = 0; $i < 1; $i++)
    <div class="col-6 ocl-md-4 mb-4 text-center">
        <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="immagine segnaposto">
    </div>
    @endfor
    <div class="row justify-content-end marginCustom">
        <div class="col-md-6 ps-4 d-flex flex-column justify-content-between">
            <div>
                <h1>{{$article_to_check->title}}</h1>
                <h3>{{__('ui.Author')}}: {{$article_to_check->user->name}}</h3>
                <h4>{{__('ui.Created_Date')}}: {{$article_to_check->getCreationTime()}}</h4>
                <h4>{{$article_to_check->price}} €</h4>
                <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
                <p class="h6">{{$article_to_check->description}}</p>
            </div>
            <div class="d-flex pb-4 justify-content-start">
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
    </div>
    @endif
    
    @if (!$article_to_check)
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="fst-italic display-4 marginCustom">
                {{__('ui.No_Art_to_check')}}
            </h1>
        </div>
    </div>
    @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mt-5 ps-5">
                    <a href="{{route('home')}}" class="my-5 btn colorBtn p-3 px-4">{{__('ui.Return_Home')}}</a>
                </div>
            </div>
        </div>
</div>

</x-layout>