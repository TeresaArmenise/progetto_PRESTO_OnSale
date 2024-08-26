<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="display-4 pt-t">
                    <h1>Registrati</h1>
                </div>
            </div>
        </div>
    </div> 
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{ route('register') }}" class="shadow rounded p-5">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Nome utente</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Indirizzo Email</label>
                    <input type="email" class="form-control" name="email" >
                </div>
                
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Conferma Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
            </form>
        </div>
    </x-layout>