<div>
    <div>
        <form wire:submit>
            <div class="mb-3">
                <label  class="form-label">Titolo articolo</label>
                <input type="text" class="form-control"  wire:model="titolo">
            </div>
            <div class="mb-3">
                <label  class="form-label">Descrizione</label>
                <input type="text" class="form-control" wire:model="descrizione" >
            </div>
     <div class="mb-3">
                <label  class="form-label">Prezzo</label>
                <input type="text" class="form-control" wire:model="prezzo" >
            </div>
            <button type="submit" class="btn btn-outline-primary">Inserisci Articolo</button>
        </form>
    </div>
</div>
