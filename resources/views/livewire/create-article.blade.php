<div>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-6 w-100">
                
                <form wire:submit="save" class="shadow rounded p-5">
                    <div class="mb-3">
                        <label  class="form-label">{{__('ui.Title_Art')}}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.blur="title">
                        
                        @error('title')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">{{__('ui.Description')}}</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description">
                        
                        @error('description')
                        <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                        
                    </div>
                    <div class="mb-4">
                        <label  class="form-label">{{__('ui.Price')}}</label>
                        <input type="numeric" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price">
                        
                        @error('price')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <select id="category"  class="form-control @error('category') is-invalid @enderror" wire:model.blur="category">
                            <option class="fst-italic text-secondary" label value="">{{__('ui.Select_Cat')}}</option>
                            
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach

                        </select>
                        @error('category')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-outline-primary">{{__('ui.Add_Art')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
