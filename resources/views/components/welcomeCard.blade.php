<div class="container mt-5">
    <div class="card mb-3" style="max-width: 100vw;">
        <div class="row no-gutters">
                <div class="col-12 col-md-6 my-auto text-center overflow-hidden">
                    <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : "https:picsum.photos/900"}}" class="card-img w-100" alt="Product Image">
                </div>
            <div class="col-12 col-md-6">
                <div class="card-body h-100 d-flex flex-column justify-content-evenly text-center">
                    <h5 class="card-title">{{$article->getSubtitle()}}</h5>
                    <p class="card-text fst-italic">{{$article->getSubdescription()}}</p>
                    <h6 class="card-text">#{{__("ui.".$article->category->name)}}</h6>
                    <p class="card-text text-muted">{{__('ui.Price')}}: {{$article->price}} €</p>
                    <div>
                        <a href="{{route('show', compact('article'))}}" class="btn rounded-pill colorBtn ">{{__('ui.Details')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>