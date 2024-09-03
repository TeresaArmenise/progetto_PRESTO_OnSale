<div class="card" style="width: 18rem;">
    <img src= "{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : 'https://picsum.photos/900'}}" class="card-img-top" alt="{{$article->title}}">
    <div class="card-body text-center">
      <h5 class="card-title bold">{{$article->title}}</h5>
      <h6 class="card-text">{{__('ui.Price')}}: {{$article->price}} €</h6>
      <a href="{{route('byCategory', ['category'=> $article->category])}}" class="text-decoration-none small"> 
        {{$article->category['name']}} {{-- {{__("ui.$article->category['name']")}} --}} </a>
      <p class="card-text small">{{$article->getSubstring()}}</p>
      
        @if($article['is_accepted']===null) 
        <p class="card-text small text-warning fw-bold"> {{__('ui.Article_in_rev')}}</p>

          @elseif($article['is_accepted']==false)
          <p class="card-text small text-danger fw-bold">{{__('ui.Article_rej')}}</p>
          @else 

          <p class="card-text small text-success fw-bold"> {{__('ui.Article_app')}}</p>

      @endif
      <div class="text-center">
        <a href="{{route('show', compact('article'))}}" class="btn rounded-pill colorBtn">{{__('ui.Details')}}</a>
      </div>
    </div>
  </div>