<div class="container mt-5">
    <div class="card mb-3" style="max-width: 100vw;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : https:picsum.photos/900}}" class="card-img" alt="Product Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->description}}</p>
                    <h6 class="card-text">{{$article->category['name']}}</h6>
                    <p class="card-text"><small class="text-muted">{{__('ui.Price')}}: {{$article->price}} €</small></p>
                    <a href="{{route('show', compact('article'))}}" class="btn rounded-pill colorBtn ">{{__('ui.Details')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>