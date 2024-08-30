<footer class="bg-dark">
    <div class="col-12 w-100 text-center bg-black py-2">
        
        {{-- EFFETTO SCROLL DA IMPLEMENTARE  --}}
        <a id="scrollToTop" class="text-decoration-none text-white "><i  class="bi bi-arrow-up-circle text-light fs-2"></i></a>
    </div>

    <div class="container d-flex flex-column-reverse justify-content-between px-5 py-5 mx-auto gap-5">
        <div class="d-flex flex-column-reverse align-items-center justify-content-between gap-3">
            <div class="mx-auto text-center text-white">
                Copyright &copy; 2022, All Rights Reserved to FastTrack-Coders
            </div>
        </div>
        <!-- List Container  -->
        <div class="d-flex justify-content-between gap-5 align-items-center fs-4">
            <div class="d-flex justify-content-between gap-5">
                <div class="d-flex flex-column gap-2 text-white">
                    <a href="" class="text-decoration-none text-light">Home</a>
                    <a href="" class="text-decoration-none text-light">Pricing</a>
                    <a href="" class="text-decoration-none text-light">Products</a>
                    <a href="" class="text-decoration-none text-light">About</a>
                </div>
                <div class="d-flex flex-column gap-2 text-white">
                    <a href="{{route('workwithus')}}" class="text-decoration-none text-light">Lavora con Noi</a> 
                    {{-- IMPLEMENTARE CON IL CONTACT FORM? --}}
                    <a href="" class="text-decoration-none text-light">Community</a>
                    <a href="" class="text-decoration-none text-light">Privacy Policy</a>
                </div>
            </div>

            <div class="mb-5">
                <img src="{{ asset('media/LogoNavBgNone.png') }}" alt="Logo" class="" width="200">
            </div>

            <div class="flex justify-center my-4 d-flex align-items-center">
                <a href="">
                    <i class="bi bi-facebook colorBtn border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-youtube colorBtn border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-twitter colorBtn border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-pinterest colorBtn border-0 pe-3 fsCustom"></i>
                </a>
                <a href="">
                    <i class="bi bi-instagram colorBtn border-0 pe-3 fsCustom"></i>
                </a>
            </div>
            {{-- <div class="d-flex flex-column justify-content-between">
                <form action="">
                    <div class="d-flex gap-3 justify-content-end mb-4">
                        <input type="text" class="flex-1 px-4 rounded" placeholder="Updated in your inbox"/>
                        <button class="px-5 py-2 text-white rounded colorBtn">
                            Go
                        </button>
                    </div>
                </form>
            </div> --}}
        </div>        
    </div>
</footer>

