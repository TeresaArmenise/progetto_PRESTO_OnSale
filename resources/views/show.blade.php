<x-layout>
    <x-nav/>
    <div class="container marginCustom">
        <div class="row height-custom justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
                {{-- <h1> {{ $article->title }}</h1> --}}
            </div>
        </div>
    </div>
    
    <div class="container marginCustom">
        <div class="row">
            <div class="col-sm-6">
                <div id="carousel" class="carouselCustom slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://picsum.photos/900">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/201">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/202">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/203">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/204">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/205">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/206">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/207">
                        </div>
                    </div>
                </div> 
                <div class="clearfix">
                    <div id="thumbcarousel" class="carouselCustom slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="https://picsum.photos/900"></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="https://picsum.photos/900/201"></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="https://picsum.photos/900/202"></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="https://picsum.photos/900/203"></div>
                            </div><!-- /item -->
                            <div class="item">
                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="https://picsum.photos/900/204"></div>
                                <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="https://picsum.photos/900/205"></div>
                                <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="https://picsum.photos/900/206"></div>
                                <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="https://picsum.photos/900/207"></div>
                            </div><!-- /item -->
                        </div><!-- /carousel-inner -->
                        <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> <!-- /thumbcarousel -->
                </div><!-- /clearfix -->
            </div> <!-- /col-sm-6 -->
            <div class="col-sm-6">
                <h2>{{$article->title}}</h2>
                <h4>{{$article->category['name']}}</h4>
                <p>{{$article->description}}</p>
                <p>€ {{$article->price}}</p>
                
            </div> <!-- /col-sm-6 -->
        </div> <!-- /row -->
    </div> <!-- /container -->
    
</x-layout>