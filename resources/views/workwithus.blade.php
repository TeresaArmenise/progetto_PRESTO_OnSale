<x-layout>
    <x-nav />
    
    <div class="container mt-5">
        <div class="mb-3">
            <a href="{{route('home')}}" class="text-danger"><--Torna indietro</a>
        </div>
        <div class="row justify-content-center shadow p-5 rounded">
            <div class="col-10 col-md-6 mt-5">
                <form action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                    <div>
                        <label for="cv">Carica il CV</label>
                        <input type="file" name="cv" id="cv" required>
                    </div>
                    <div>
                        <button type="submit">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</x-layout>