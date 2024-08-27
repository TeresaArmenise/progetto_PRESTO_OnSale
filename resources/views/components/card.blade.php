<div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/900" class="card-img-top" alt="{{$article->title}}">
  <div class="card-body text-center">
    <h5 class="card-title bold">{{$article->title}}</h5>
    <p class="card-text">{{$article->price}} €</p>
    <p class="card-text">{{$article->category['name']}}</p>
    <p class="card-text small">{{$article->getSubstring()}}</p>
    <div class="d-flex justify-content-evenly">
      <a href="{{route('show', compact('article'))}}" class="btn btn-outline-warning">Dettaglio</a>
      <a href="#" class="btn btn-outline-warning">Categoria</a>
    </div>
  </div>
</div>