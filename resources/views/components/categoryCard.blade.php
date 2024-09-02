<div class="card-container my-3">
    <div class="card-header py-3 fs-6">
        {{ $category->name }}
    </div>
    <a href="{{ route('byCategory', $category->id) }}">
    <div class="card-grid">
        <img src="{{ $category->img1}}" alt="Img categoria {{ $category->name }}">
        <img src="{{ asset($category->img2) }}" alt="Img categoria {{ $category->name }}">
        <img src="{{ asset($category->img3) }}" alt="Img categoria {{ $category->name }}">
        <img src="{{ asset($category->img4) }}" alt="Img categoria {{ $category->name }}">
    </div>
    <div class="card-footer">
        Vedi tutti i prodotti</a>
    </div>
</div>
