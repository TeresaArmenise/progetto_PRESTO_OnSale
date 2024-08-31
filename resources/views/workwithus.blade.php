<x-layout>
    <x-nav />
    <div class="container-fluid marginCustom text-center justify-content-center">
        <div class="row">
            <div class=" col-12">
                <div class="rounded">
                    <h1>Lavora con noi</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        
        <div class="row justify-content-center shadow p-5 rounded mb-5">
            <div class="col-10 col-md-6 mt-5">
                <form class="d-flex flex-column gap-3" action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="phone">Telefono</label>
                        <input class="form-control" type="text" name="phone" id="phone" required>
                    </div>
                    <div>
                        <label for="cv">Carica il CV</label>
                        <input class="form-control" type="file" name="cv" id="cv" required>
                    </div>
                    <div class="text-center">
                        <a href="{{route('home')}}" class="btn text-decoration-none bg-dark text-light Indietro"> Indietro </a>
                        <button type="submit" class="btn colorBtn2 text-center">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>