<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- google Font  -->
    <!-- Lato font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Aleo font -->
    <link href="https://fonts.googleapis.com/css2?family=Aleo&family=Lato&display=swap" rel="stylesheet">
    <!-- Encode Sans font -->
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@600&display=swap" rel="stylesheet">
    <!-- Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Style Sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- facncy box -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <!-- Bootstrap -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <title>Carousel Template · Bootstrap v5.1</title>
</head>

<body>
    <header>
        <!--header start-->
        <section class="header">
            
            <nav class="navbar navbar-expand-lg" style="background-color: whitesmoke">
                
                <div class="container">
                    <div class="header-left" style="font-size: 10px;">
                        <li>
                            <a href="#">
                                FreeShippingOnAllOrdersOver$75!
                            </a>
                        </li>
                    </div>
                    <div class="header-right">
                        <ul class="nav">
                            <li class="reg">
                                @guest
                                <a href="#" id="error1" data-mdb-toggle="modal" data-mdb-target="#exampleModal">My Account</a>
                                @else
                                @if (Route::has('login'))
                                    @auth
                                    @if(Auth::user()->avatar)
                                    <img src="{{asset('/uploads/avatars/'.Auth::user()->avatar)}}" alt="{{ Auth::user()->name }}" style="border: 1px solid #cccccc; border-radius: 20px; width:30px; float:left;">
                                   @else
                                    <img src="{{asset('/uploads/avatars/default.jpg')}}" alt="{{ Auth::user()->name }}" style="border: 1px solid #cccccc; border-radius: 20px; width:30px; float:left;">
                                   @endif
                                <a href="#" data-mdb-toggle="modal" data-mdb-target="#Userpanel">{{ Auth::user()->name }}</a>
                                <!--User Panel Modal-->
                                <div class="modal fade" id="Userpanel" tabindex="-1" aria-labelledby="UserpanelLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                            <div class="modal-header ">
                                                <h6 class="modal-title block px-4  fs-5 fw-bolder text-gray-400" id="UserpanelLabel">{{ __('Manage Account') }}</h6>
                                                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body block px-4 py-2  fs-4 text-gray-400">
                                                <a class="block px-3  mx-auto fs-5 text-gray-400" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class="block px-3  mx-auto fs-5 text-gray-400" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();">{{ __('Logout') }}</a>
                                                </form> 
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--User Panel Modal X-->
                                @else
                                @endauth
                                @endguest
                                <a href="#">Wishlist</a>
                                <a href="#">Currency:$<i class="fas fa-caret-down"></i></a>
                                <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                                
                                <!--modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true" action>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h5 class="modal-title block mb-4 fs-2 fw-bolder text-gray-400" id="exampleModalLabel">Sign in</h5>

                                                
                                                <!-- Pills content -->
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="pills-login"
                                                        role="tabpanel" aria-labelledby="tab-login">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <div class="text-center mb-3">
                                                                <p>Sign in with:</p>
                                                                {{-- <a type="button" class="btn btn-dark btn-floating mx-1" href="{{route('login.facebook')}}"><i class="fab fa-facebook-f"></i>
                                                                </a> --}}
                                                                <a type="button"
                                                                    class="btn btn-dark btn-floating mx-1" href="{{route('login.google')}}">
                                                                    <i class="fab fa-google"></i>
                                                                </a>

                                                                {{-- <a type="button"
                                                                    class="btn btn-dark btn-floating mx-1">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a> --}}

                                                                {{-- <a type="button"
                                                                    class="btn btn-dark btn-floating mx-1" href="{{route('login.github')}}">
                                                                    <i class="fab fa-github"></i>
                                                                </a> --}}
                                                            </div>

                                                            <p class="text-center">or:</p>

                                                            <!-- Email input -->
                                                            <div class="form-outline mb-4">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                <label class="form-label" for="email" >Email</label>
                                                            </div>

                                                            <!-- Password input -->
                                                            <div class="form-outline mb-4">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                <label class="form-label"
                                                                for="password" value="{{ __('Password') }}">Password</label>
                                                            </div>

                                                            <!-- 2 column grid layout -->
                                                            <div class="row mb-4">
                                                                <div class="col-md-6 d-flex justify-content-center">
                                                                    <!-- Checkbox -->
                                                                    <div class="form-check mb-3 mb-md-0">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                        <label class="form-check-label " for="remember">
                                                                            {{ __('Remember Me') }}
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 d-flex justify-content-center">
                                                                    <!-- Simple link -->
                                                                    @if (Route::has('password.request'))
                                                                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Submit button -->
                                                            <button type="submit"
                                                                class="btn btn-black btn-block mb-4">{{ __('Sign in') }}</button>

                                                            <!-- Register buttons -->
                                                            <div class="text-center">
                                                                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                <!-- Pills content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--/.container -->
        </section>
        <!--/.header-->
        <!--header end-->
        <!-- Navbar -->
        <style>
            .aa2 li a:hover,
            .aa22 i:hover {
                color: #d53bcb !important;
                -webkit-transition: .5s;
                -moz-transition: .5s;
                -ms-transition: .5s;
                -o-transition: .5s;
                transition: .5s;

            }
        </style>

        <section style="background-color: rgba(0, 0, 0, 0.993); display: unset">
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top " style="background-color: rgba(0, 0, 0, 0.993);">
                <div class="container p-2">
                    <!-- Navbar brand -->
                    <!-- Toggle button -->
                    <a href=""><img src="images/logo.png " alt="#"></a>
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0  aa2">
                            <!-- Link -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Women</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Men</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Footwear</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                        </ul>
                        <!-- Search -->
                        <form class="aa22">
                            <a class="nav-link dropdown-toggle hidden-arrow btn btn-dark  mx-0 p-1" href="#"
                                id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false" style="background-color: rgba(0, 0, 0, 0.993);">
                                <span class="input-group-text border-0 text-white" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="input-group mt-0 mx-0">
                                        <div class="card" style="background-color: rgba(0, 0, 0, 0.993);">
                                            <div class="card-body p-3">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-12 col-xl-10 d-lg-flex flex-row mb-lg-4 mb-xl-0">
                                                        <div id="basic"
                                                            class="form-outline form-white flex-fill me-lg-2 mb-3 mb-lg-0">
                                                            <input type="text" id="form1" class="form-control" />
                                                            <label class="form-label text-white" for="form1">What
                                                                are
                                                                you
                                                                looking
                                                                for?</label>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-dark  btn-floating">
                                                        <i class="fas fa-search"
                                                            style="background-color: rgba(0, 0, 0, 0.993);"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </nav>
        </section>



        <!-- Navbar -->

        

    </header>
<main class="mt-6">
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

    </main>
    <!-- Footer -->
    <footer class="text-center bg-dark text-lg-start mt-xl-5 pt-4">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4 text-white">Shops</h5>

                    <ul class="list-unstyled mb-4">
                        <li>
                            <a href="#!" class="text-white">New In</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Women</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Men</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Schuhe Shoes</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Bags & Accessories</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Top Brands</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Sale & Special Offers</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Lookbook</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4 text-white">Information</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-white">About us</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Customer Service</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">New Collection</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Best Sellers</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Manufacturers</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Terms & Condition</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Blog</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4 text-white">Customer Service</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-white">Search Terms</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Advanced Search</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Orders & Returns</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Contact Us</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">RSS</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Help & FAQs</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Consultant</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Store Locations</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">
                    <h5 class="text-uppercase mb-2 text-white">news letter</h5>
                    <span id="textExample2" class="form-text">Sign up for newsletter </span>
                    <div class="form-outline form-white mb-3 mt-2">
                        <input type="email" id="form5Example2" class="form-control" />
                        <label class="form-label" for="form5Example2">Email address</label>
                    </div>

                    <button type="submit" class="btn btn-block btn-secondary mb-2">Subscribe</button>
                    <div class="justify-content-center col-md-12 mb-0 px-5 ">
                       <a style="color:gray" href="#"><i class="fab fa-facebook-square text-gray-dark   fa-2x"></i></a> 
                       <a style="color:gray" href="#"><i class="fab fa-twitter-square text-gray-dark  fa-2x"></i></a>
                       <a style="color:gray" href="#"><i class="fab fa-behance-square text-gray-dark  fa-2x"></i></a>
                       <a style="color:gray" href="#"><i class="fab fa-tumblr-square text-gray-dark  fa-2x"></i></a>
                       <a style="color:gray" href="#"><i class="fab fa-vimeo-square text-gray-dark  fa-2x"></i></a>
                       <a style="color:gray" href="#"><i class="fab fa-youtube-square text-gray-dark  fa-2x"></i></a>
                    </div>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

        </div>
        <!-- Grid container -->
        <div class="p-3 " style="background-color: rgba(0, 0, 0, 0.993);">


            <div class="container ">
                <div class="row">
                    <div class="col-6 text-start p-1">© 2022 Copyright:
                        <a class="text-white" href="#">Abdelrahman Attia</a>
                    </div>
                    <div class="col-6 text-end">
                        <i class="fab fa-cc-visa fa-2x"></i>
                        <i class="fab fa-cc-mastercard fa-2x"></i>
                        <i class="fab fa-cc-paypal fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->

        <!-- Copyright -->
        <section class="scroll-to-top position-fixed bottom-2 end-1">
            <div class="container">
                <i class="fas fa-chevron-circle-up 2x"></i>
            </div>
        </section>

    </footer>

    <!--/.scroll-Top-->
    <!-- Footer -->
    <!-- MDB -->
    
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script> <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- mixitup pluging -->
    <script src="js/mixitup.min.js"></script>
    <!-- fancybox pluging- -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- animation cdn lik -->
    <script src="js/wow.min.js"></script>

    <!-- main.js -->
    <script src="js/main.js"></script>

</body>

</html>