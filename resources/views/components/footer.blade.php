<footer class="bg-dark">
    <div class="w-100 text-center bg-black py-2 marginCustom">
        
        {{-- EFFETTO SCROLL DA IMPLEMENTARE  --}}
        <a id="scrollToTop" class="text-decoration-none text-white "><i  class="bi bi-arrow-up-circle text-light fs-2"></i></a>
    </div>

    <div class="container d-flex flex-column-reverse justify-content-between px-0 py-5 mx-auto gap-5">
        <div class="d-flex flex-column-reverse align-items-center justify-content-between gap-3">
            <div class="mx-auto text-center text-white">
                Copyright &copy; 2024, {{__("ui.Copyright")}} FastTrack-Coders
            </div>
        </div>
        <!-- List Container  -->
        <div class="d-flex justify-content-between gap-5 align-items-center fs-4">
            <div class="d-flex justify-content-between gap-5">
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

            <div class="mb-5">
                <a href="{{route('home')}}">
                    <img src="{{ asset('media/LogoNavBgNone.png') }}" alt="Logo" class="" width="200">
                </a>
            </div>

            <div class="flex justify-center my-4 d-flex align-items-center">
                <a href="">
                    <i class="bi bi-facebook colorIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-youtube colorIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-twitter colorIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-pinterest colorIconFooter border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-instagram colorIconFooter border-0 pe-3 fsCustom"></i>
                </a>
            </div>
        </div>        
    </div>
</footer>

