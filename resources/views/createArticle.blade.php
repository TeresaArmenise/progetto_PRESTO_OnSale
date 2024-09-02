<x-layout>
    <x-nav />
    <div class="container text-center marginCustom mb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">{{__('ui.Create_Art')}}</h1>
            </div>
        </div>
    </div>


        <div class="container">
            <div class="row">
                <div class="col-10 col-md-6 w-100">
                    <a href="{{route('home')}}"><-- {{__('ui.Go_Back')}}</a>
                </div>
            </div>
        </div>
    <livewire:create-article />




</x-layout>