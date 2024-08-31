<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/900" class="card-img-top" alt="{{$article->title}}">
    <div class="card-body text-center">
      <h5 class="card-title bold">{{$article->title}}</h5>
      <h6 class="card-text">Prezzo: {{$article->price}} €</h6>
      <a href="{{route('byCategory', ['category'=> $article->category])}}" class="text-decoration-none small">{{$article->category['name']}}</a>
      <p class="card-text small">{{$article->getSubstring()}}</p>
      
        @if($article['is_accepted']===null) 
        <p class="card-text small text-warning fw-bold"> Articolo in revisione</p>

          @elseif($article['is_accepted']==false)
          <p class="card-text small text-danger fw-bold">Articolo rifiutato</p>
          @else 
          <p class="card-text small text-success fw-bold"> Articolo approvato</p>
      @endif
      <div class="text-center">
        <a href="{{route('show', compact('article'))}}" class="btn rounded-pill colorBtn">Dettaglio</a>
      </div>
    </div>
  </div>