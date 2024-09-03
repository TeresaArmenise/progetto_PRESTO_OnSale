<x-layout>
    <x-nav />
    <div class="container marginCustom">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="display-4 pt-t">
                    <h1>{{__('ui.Access')}}</h1>
                </div>
            </div>
        </div>
    </div> 
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{ route('login') }}" class="shadow rounded p-5">
                @csrf
                <div class="mb-3">
                <label  class="form-label">{{__('ui.email')}}</label>
                <input type="email" class="form-control" name="email" >
                </div>
        
            <div class="mb-3">
                <label  class="form-label">{{__('ui.password')}}</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">{{__('ui.Access')}}</button>
        </form>
        
    </div>
    </div>
</x-layout>