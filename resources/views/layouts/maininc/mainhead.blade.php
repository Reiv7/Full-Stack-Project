<header>
    <!--header start-->
    <section class="header">
        <nav class="navbar navbar-expand-lg" style="background-color: whitesmoke">
            <div class="container">
                <div class="header-left" style="font-size: 10px;">
                    <li>
                        <a href="">
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
                            <a href="{{ url('cart')}} " type="button"><i class="fas fa-shopping-cart"></i>Cart <span class="badge badge-pill bg-secondary cart-count">0</span></a>
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
        .aa22 i:hover{
            color: #d53bcb !important;
            -webkit-transition: .5s;
            -moz-transition: .5s;
            -ms-transition: .5s;
            -o-transition: .5s;
            transition: .5s;

        }
    </style>
    <section style="background-color: rgba(0, 0, 0, 0.993); display: unset mb-0">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgba(0, 0, 0, 0.993);">
            <div class="container p-2 ">
                <!-- Navbar brand -->
                <!-- Toggle button -->
                <a href="{{ url('/') }}"><img src="{{asset('images/logo.png') }}" alt="#"></a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0  aa2">
                        <!-- Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/category/Women') }}">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/category/Men') }}">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/category/Footwear') }}">Footwear</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/category/Accessories') }}">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('category') }}">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog</a>
                        </li>
                    </ul>
                    <!-- Search -->
                    <a class="nav-link dropdown-toggle aa22 hidden-arrow btn btn-dark  mx-0 p-1"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                        aria-expanded="true" style="background-color: rgba(0, 0, 0, 0.993);">
                        <span class="input-group-text border-0" style="background-color: rgba(0, 0, 0, 0.993);" id="search-addon">
                            <i class="fas fa-search text-white"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <div class="input-group mt-0 mx-0">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.993);">
                                    <div class="card-body p-3">
                                        <form action="{{ url('searchproduct') }}" method="POST">
                                            @csrf
                                            <div id="basic"
                                                class="form-outline form-white flex-fill me-lg-2 mb-3 mb-lg-0 input-group">
                                                <input type="search"  id="form1" name="product_name" class="form-control" />
                                                <label class="form-label text-white" for="form1">looking for a product?</label>
                                                {{-- Search responsive --}}
                                                <style>
                                                    .ui-autocomplete {
                                                    z-index: 3500 !important;
                                                    background-color: rgba(0, 0, 0, 0.993);
                                                    color: #cccccc;
                                                    }
                                                </style>
                                                <button type="submit" id="search" class="btn-dark btn-floating input-group-text">
                                                    <i class="fas fa-search"
                                                        style="background-color: rgba(0, 0, 0, 0.993);"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar -->
</header>
