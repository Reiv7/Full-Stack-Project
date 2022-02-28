@extends('layouts.main')
@section('title')
    Welcome To Fashion
@endsection
@section('content')
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;

        }

        .coloring {
            color: black;
        }

        .carousel-item:nth-child(1) {
            background-image: url('images/slider.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('images/1640924629642.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
    </style>
    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong mt-0 " data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->


            <!-- Single item -->
            <div class="carousel-item active">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-uppercase text-center">
                            <h2 style="letter-spacing:9.12px; background-color:#d53bcb; opacity: 0.6;"><br>
                                Something Is
                                Better
                                <p style="letter-spacing:16px; background-color:#d53bcb;">
                                    <br>Fashion Lorrem
                                </p>
                                <br></h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item ">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-uppercase text-center mx-auto">
                            <h2 style="letter-spacing:9.12px; background-color:#d53bcb; opacity: 0.6;">
                                <br>Something Is Better
                                <p style="letter-spacing:16px; background-color:#d53bcb; ">
                                    <br>Fashion Lorrem
                                </p>
                                <br></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" style="color: black;" href="#introCarousel" role="button"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" style="color: black;" href="#introCarousel" role="button"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Carousel wrapper -->

    <!-- Marketing messaging and featurettes
    =============================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <section id="trend">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 gx-3 mb-3">
                    <div class="trend-woman">
                        <img src="images/about-img1.jpg" class="img-fluid">
                        <div class="trend-woman-hover">
                            <a href="">VIEW COLLECTION</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-5 gx-3 mb-1 mt-1">
                    <div class="trend-woman extra-trend1">
                        <img src="images/about-img2.jpg" class="img-fluid">
                        <div class="trend-woman-hover">
                            <a href="">VIEW COLLECTION</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gx-3 mb-5">
                    <div class="trend-content">
                        <h2>Hot Collection</h2>
                        <h1>New Trend For Women</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis neque eu erat
                            aliquet posuere. Curabitur quis placerat nulla, nec vulputate arcu</p>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
                <div class="col-md-5 gx-3 mb-1">
                    <div class="trend-woman extra-trend">
                        <img src="images/about-img3.jpg " class="img-fluid">
                        <div class="trend-woman-hover">
                            <a href="">VIEW COLLECTION</a>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- *******trend-part-end****** -->

    <!-- *******header-title-part-end****** -->
    <section id="header-title mb-0">
        <div class="container mb-0">
            <div class="header-title mb-0">
                <p>Featured Items</p>
            </div>
        </div>
        <br>
    </section>
    <!-- *******header-title-part-end****** -->

    <!-- *******product-part-end****** -->
    <section id="product">
        <div class="container">
            <div class="product-nav">
                <ul>
                    <li class="mixitup-control-active" data-filter="all">All</li>
                    <li data-filter=".men">Men</li>
                    <li data-filter=".woman">Woman</li>
                    <li data-filter=".kids">Kids</li>
                </ul>
            </div>
            <div class="product-itmes">
                <div class="row product">
                    <div class="mix woman kids col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/1.jpg">
                                <p>$150.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/1.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/1.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/8.jpg">
                                <p>$120.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/8.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/8.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg2"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix woman col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/3.jpg">
                                <p>$150.00</p>
                                <h3>20%<br>OFF</h3>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/3.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/3.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg3"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/9.jpg">
                                <p>$120.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/9.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/9.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg4"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix woman col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/2.jpg">
                                <p>$150.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/2.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/2.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg5"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/7.jpg">
                                <p>$120.00</p>
                                <h3>20%<br>OFF</h3>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/7.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/7.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg6"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix woman col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/4.jpg">
                                <p>$150.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/4.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/4.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg7"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/10.jpg">
                                <p>$120.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/10.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/10.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg8"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->
                </div> <!-- end row -->
            </div>
        </div> <!-- end container -->
    </section>
    <!-- *******product-part-end****** -->

    <!-- *******offer-part-end****** -->
    <style>
        /* Default height for small devices */
        #intro {
            height: 600px;
            margin-top: 58px;
        }

        @media (max-width: 991px) {
            #intro {
                margin-top: 45px;
            }
        }
    </style>
    <section class="mx-3">
        <div class="row">
            <div id="intro" class="text-center bg-image shadow-1-strong col-md-6"
                style="background-image: url('images/offer-left.jpg');">
                <div class="mask" style="background-color: rgba(3,0,1,.4);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white swappy justify-content-end">
                            <h2>
                                70%
                                <span>
                                    OFF
                                </span>
                            </h2>
                            <p>Tao Kinben Na?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="intro" class="p-5 text-center bg-image shadow-1-strong col-md-6"
                style="background-image: url('images/offer-right.jpg');">
                <div class="mask" style="background-color: rgba(3,0,1,.4);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white swappy2  justify-content-end">
                            <p>AMR CHEHARA KHARAP NA</p>
                            <h2><span>Chehara</span> Dia ki hoy</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *******offer-part-end****** -->
    <!-- *****Trending-Items********* -->
    <section id="header-title">
        <div class="container">
            <div class="header-title">
                <p>Trending Items</p>
            </div>
        </div>
    </section>
    <section id="product">
        <div class="container mt-5">
            <div class="product-itmes">
                <div class="row product">
                    <div class="mix woman kids col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/1.jpg">
                                <p>$150.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/1.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/1.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/8.jpg">
                                <p>$120.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/8.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/8.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg2"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix woman col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/3.jpg">
                                <p>$150.00</p>
                                <h3>20%<br>OFF</h3>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/3.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/3.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg3"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/9.jpg">
                                <p>$120.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/9.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/9.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg4"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix woman col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/2.jpg">
                                <p>$150.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/2.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/2.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg5"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/7.jpg">
                                <p>$120.00</p>
                                <h3>20%<br>OFF</h3>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/7.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/7.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg6"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix woman col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/4.jpg">
                                <p>$150.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/4.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/4.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg7"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->

                    <div class="mix men col-md-3">
                        <div class="product-mother">
                            <div class="product-each">
                                <img src="images/product/10.jpg">
                                <p>$120.00</p>
                                <div class="product-each-when-hover">
                                    <a data-fancybox="product" href="images/product/10.jpg">
                                        <i class="far fa-eye"></i>
                                        <div class="d-non">
                                            <img src="images/product/10.jpg" alt="hidden">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-details">
                                <p>Suspendisse et.</p>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ic-color"></i>
                                </div>
                                <div class="icone-bottom">
                                    <i class="fa fa-heart bg8"></i>
                                    <i class="fa fa-shopping-cart"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-md-3 -->
                </div> <!-- end row -->
                <br>
                <div class="Load-more mb-3 d-flex justify-content-center ">
                    <a href="">LOAD MORE</a>
                </div>
                <br>
            </div>
        </div> <!-- end container -->
    </section>
    <style>
        /* Default height for small devices */
        #wide-banner {
            height: 600px;
            /* Margin to fix responsive */
            margin-top: 58px;
        }

        @media (max-width: 991px) {
            #wide-banner {
                /* Margin to fix responsive */
                margin-top: 45px;
            }
        }
    </style>
    <section class="mb-0">
        <div id="wide-banner" class="p-4 text-center bg-image shadow-1-strong"
            style="background-image: url('images/Layer_21.png'); background-color: rgba(3,0,04);">
            <div class="mask">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white px-4">
                        <h1 class="mb-6 mt-3"><i style="color: blueviolet;" class="fas fa-quote-left fa-2x"></i>
                        </h1>
                        <!-- Time Counter -->
                        <p class="text-center mb-8">"Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Reprehenderit, ut, est provident sapiente, deserunt nesciunt corrupti voluptas et
                            placeat neque possimus exercitationem vero quia eius modi"
                        </p>
                        <br>
                        <img src="images/Layer22.png" class="rounded mt-0 mb-2" alt="">
                        <br>
                        <a>MD SHAHIN ALAM</a>
                        <br>
                        <a>Ceo Of TTCM</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="header-title" class=" mb-5">
        <div class="container ">
            <div class="header-title">
                <p>Latest Blog</p>
            </div>
        </div>
        <br>
    </section>
    <div class="container">
        <!--Section: Content-->
        <section class="justify-content-center">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-12 mb-4 justify-content-center">
                    <div class="card justify-content-center">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/Layer_23.png" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body justify-content-center">
                            <h5 class="card-title">Lorem Title</h5>
                            <p class="card-text justify-content-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet placeat neque possimus
                                delectus quia est omnis dolorem necessitatibus minima, quos natus explicabo?
                            </p>
                            <div class="Load-more2 d-flex justify-content-start ">
                                <a href="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 justify-content-center">
                    <div class="card justify-content-center">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/Layer_24.png" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body justify-content-center">
                            <h5 class="card-title">Lorem Title</h5>
                            <p class="card-text justify-content-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet placeat neque possimus
                                delectus quia est omnis dolorem necessitatibus minima, quos natus explicabo?
                            </p>
                            <div class="Load-more2 d-flex justify-content-start ">
                                <a href="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/Layer_25.png" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body justify-content-center">
                            <h5 class="card-title">Lorem Title</h5>
                            <p class="card-text justify-content-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet placeat neque possimus
                                delectus quia est omnis dolorem necessitatibus minima, quos natus explicabo?
                            </p>
                            <div class="Load-more2 d-flex justify-content-start ">
                                <a href="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--Section: Content-->
    <section>
        <div class="container pt-4 mt-4">
            <div class="header-title">
                <p>Shop By Brand</p>
            </div>
        </div>
    </section>
    <div class="container mb-5 ">
        <div class="row mt-5">
            <div class="col mt-4 mb-2 text-center">
                <img src="images/logo4.png" alt="">
            </div>
            <div class="col mt-4 mb-2 text-center">
                <img src="images/logo4.png" alt="">
            </div>
            <div class="col mt-4 mb-2 text-center">
                <img src="images/logohover.png" alt="">
            </div>
            <div class="col mt-4 mb-2 text-center">
                <img src="images/logo4.png" alt="">
            </div>
        </div>
    </div>
@endsection