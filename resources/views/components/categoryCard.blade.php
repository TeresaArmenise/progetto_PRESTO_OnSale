<div class="card-container my-3">
    <div class="card-header">
        {{$cat['name']}}
    </div>
    <div class="card-grid">
        <img src="{{ asset($cat['img1'])}}" alt=" Img categoria {{$cat['name']}}">
        <img src="{{ asset($cat['img2'])}}" alt="Img categoria {{$cat['name']}}">
        <img src="{{ asset($cat['img3'])}}" alt="Img categoria {{$cat['name']}}">
        <img src="{{ asset($cat['img4'])}}" alt="Img categoria {{$cat['name']}}">
    </div>
    <div class="card-footer">
        <a href="#">Vedi tutti i prodotti</a>
    </div>
</div>