<div>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-6 w-100">
                @if (session()->has('message'))
                <div class="alert alert-success fs-1">
                    {{ session('message') }}
                </div>        
                @endif


                <form wire:submit="save" class="shadow rounded p-5">
                    <div class="mb-3">
                        <label  class="form-label">Titolo articolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.blur="title">

                        @error('title')
                            <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Descrizione</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description">

                        @error('description')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Prezzo</label>
                        <input type="numeric" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price">

                        @error('price')
                            <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                            <option class="fst-italic text-secondary" label>Seleziona una categoria</option>
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>

                        @error('category')
                            <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-outline-primary">Inserisci Articolo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
