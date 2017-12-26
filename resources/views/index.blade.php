@extends('layouts.app')

@section('content')
    <div id="content">

        <div class="container">
            <div class="col-md-12">
                <div id="main-slider">
                    <div class="item">
                        <img src="{{URL::to('img/slide5.jpeg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{URL::to('img/slide1.jpeg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{URL::to('img/slide3.jpeg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{URL::to('img/slide4.jpeg')}}" alt="">
                    </div>
                </div>
                <!-- /#main-slider -->
            </div>
        </div>

        <!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
        <div id="advantages">

            
            <!-- /.container -->

        </div>
        <!-- /#advantages -->

        <!-- *** ADVANTAGES END *** -->

        <!-- *** HOT PRODUCT SLIDESHOW ***
_________________________________________________________ -->
        <div id="hot">

            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>Hot this week</h2>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="product-slider">
                @if(count($products) > 0)
                        @foreach($products as $product)
                    <div class="item">
                    
                        <div class="product">
                            <div class="flip-container">
                                
                            </div>
                            <a href="/" class="invisible">
                                <img src="{{URL::to('cover_image/' .$product->image1)}}" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="/">{{$product->title}}</a></h3>
                                <p class="price">PHP {{number_format($product->price, 2, '.', ',')}}</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                        
                    </div>
                    @endforeach
                    @endif

                    {{-- <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">White Blouse Armani</a></h3>
                                <p class="price"><del>$280</del> $143.00</p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">White Blouse Versace</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product1.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Fur coat</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <!-- /.product -->
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">White Blouse Armani</a></h3>
                                <p class="price"><del>$280</del> $143.00</p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div> --}}

                </div>
                <!-- /.product-slider -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /#hot -->

        <!-- *** HOT END *** -->

        <!-- *** GET INSPIRED ***
_________________________________________________________ -->
        <div class="container" data-animate="fadeInUpBig">
            <div class="col-md-12">
                <div class="box slideshow">
                    <h3>Get Inspired</h3>
                    <p class="lead">Get the inspiration from our world class designers</p>
                    <div id="get-inspired" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <img src="{{URL::to('img/slide6.jpeg')}}" alt="Get inspired" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{URL::to('img/slide7.jpeg')}}" alt="Get inspired" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{URL::to('img/slide9.jpeg')}}" alt="Get inspired" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** GET INSPIRED END *** -->
        <!-- /.container -->
        <!-- *** BLOG HOMEPAGE END *** -->
    </div>
    <!-- /#content -->
@endsection