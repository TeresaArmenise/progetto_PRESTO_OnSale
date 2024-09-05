<x-layout>
    <x-nav />
    <div class="container marginCustom">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="display-4 pt-t">
                    <h1 class="marginTop">{{__('ui.Register')}}</h1>
                </div>
            </div>
        </div>
    </div> 
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{ route('register') }}" class="shadow rounded p-5">
                @csrf
                <div class="mb-3">
                    <label  class="form-label text-start">{{__('ui.username')}}</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">{{__('ui.email')}}</label>
                    <input type="email" class="form-control" name="email" >
                </div>
                
                <div class="mb-3">
                    <label  class="form-label">{{__('ui.password')}}</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label  class="form-label">{{__('ui.conf_pass')}}</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary colorBtn text-center">{{__('ui.Register')}}</button>
                </div>
                <div class="text-center">
                    <p> {{__('ui.Alr_Reg')}} <a href="{{route('login')}}">{{__('ui.Click')}}</a></p>
                </div>
            </form>
        </div>
    </div>
    </x-layout>