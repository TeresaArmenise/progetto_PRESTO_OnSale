<x-layout>
    <x-nav />
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="display-4 pt-t">
                    <h1>Accedi</h1>
                </div>
            </div>
        </div>
    </div> 
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{ route('login') }}" class="shadow rounded p-5">
                @csrf
                <div class="mb-3">
                <label  class="form-label">Indirizzo email</label>
                <input type="email" class="form-control" name="email" >
                </div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
    </div>
</x-layout>