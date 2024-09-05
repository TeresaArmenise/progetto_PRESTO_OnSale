<footer class="container-fluid bg-dark overflow-hidden marginCustom px-0">

    {{-- EFFETTO SCROLL DA IMPLEMENTARE  --}}
    <div class="w-100 text-center bg-black py-2">
        <a id="scrollToTop" class="text-decoration-none text-white "><i  class="bi bi-arrow-up-circle text-light fs-2"></i></a>
    </div>

    <div class="row d-flex justify-content-between py-5 mx-auto columnDisplay">
        <!-- List Container  -->
        <div class="col-12 col-md-12 col-lg-4 d-flex justify-content-around gap-5">
                <div class="d-flex flex-column gap-2 text-white">
                    <a href="" class="text-decoration-none text-light">{{__('ui.Home')}}</a>
                    <a href="{{route('index')}}" class="text-decoration-none text-light">{{__('ui.Articles')}}</a>
                    <a href="" class="text-decoration-none text-light">{{__('ui.Products')}}</a>
                    <a href="" class="text-decoration-none text-light">{{__('ui.About')}}</a>
                </div>
                <div class="d-flex flex-column gap-2 text-white">
                    <a href="{{route('workwithus')}}" class="text-decoration-none text-light">{{__('ui.Workwithus')}}</a> 
                    {{-- IMPLEMENTARE CON IL CONTACT FORM? --}}
                    <a href="" class="text-decoration-none text-light">{{__('ui.Community')}}</a>
                    <a href="" class="text-decoration-none text-light">{{__('ui.Privacy')}}</a>
                </div>
        </div>
        {{-- Container Logo  --}}
        <div class="d-none d-sm-block col-md-12 col-lg-4 text-center">
            <div class="mb-5">
                <a href="{{route('home')}}">
                    <img src="{{ asset('media/LogoNavBgNone.png') }}" alt="Logo" class="" width="200">
                </a>
            </div>
        </div>
        {{-- Container Icons  --}}
        <div class="col-12 col-md-12 col-lg-4 centered">
            <div class="flex justify-center my-4 d-flex align-items-center">
                <a href="">
                    <i class="bi bi-facebook colorIconFooter sizeIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-youtube colorIconFooter sizeIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-twitter colorIconFooter sizeIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-pinterest colorIconFooter sizeIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-instagram colorIconFooter sizeIconFooter border-0 pe-3 fsCustom"></i>
                </a>
            </div>
        </div>
        {{-- Container Logo // V.O. sm --}}
        <div class="col-12 d-md-none text-center">
            <div class="mb-5">
                <a href="{{route('home')}}">
                    <img src="{{ asset('media/LogoNavBgNone.png') }}" alt="Logo" class="" width="200">
                </a>
            </div>
        </div>
        {{-- Container Copyright  --}}
        <div class="col-12">
            <div class="d-flex flex-column-reverse align-items-center justify-content-between gap-3">
                <div class="mx-auto text-center text-white">
                    Copyright &copy; 2024, {{__("ui.Copyright")}} FastTrack-Coders
                </div>
            </div>
        </div>  
    </div>
</footer>