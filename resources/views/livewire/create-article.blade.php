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
                    <div class="mb-4">
                        <label  class="form-label">{{__('ui.Category')}}</label>
                        <select id="category"  class="form-control @error('category') is-invalid @enderror" wire:model.blur="category">
                            <option class="fst-italic text-secondary" label value="">{{__('ui.Select_Cat')}}</option>
                            
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}"> {{__("ui.$cat->name")}}</option>
                            @endforeach
                            
                        </select>
                        @error('category')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="mb-4">
                        <label  class="form-label">{{__('ui.Images')}}</label>
                        <input type="file" wire:model.live="temporary_images" multiple class="form-control @error('temporary_images . *') is-invalid @enderror" placeholder="Img/" >
                        @error('temporary_images . *')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                        @error ('temporary_images')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>{{__('ui.Img_prew')}}:</p>
                            <div class="row border border-4 border-success rounded shadow py-4">
                                @foreach ($images as $key=> $image)
                                <div class="col d-flex flex-column align-items-center my-3">
                                    <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});">
                                    </div> 
                                    <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})"> X </button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-outline-primary colorBtn">{{__('ui.Add_Art')}}</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
