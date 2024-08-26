<div>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-6 w-100">
                <form wire:submit class="shadow rounded p-5">
                    <div class="mb-3">
                        <label  class="form-label">Titolo articolo</label>
                        <input type="text" class="form-control"  wire:model="title">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Descrizione</label>
                        <input type="text" class="form-control" wire:model="description">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Prezzo</label>
                        <input type="numeric" class="form-control" wire:model="price">
                    </div>
                    <select id="category" wire:model="category" class="form-control">
                        <option label disabled>Seleziona una categoria</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-outline-primary">Inserisci Articolo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
