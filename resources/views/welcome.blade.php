<x-layout>
    <x-nav />
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">WELCOME TO PRESTO</h1>
            </div>
        </div>
    </div>
    {{-- @auth --}}
    <a href="{{route('create')}}" type="button" class="btn btn-primary">Aggiungi Articolo</a>
    {{-- @endauth --}}
</x-layout>