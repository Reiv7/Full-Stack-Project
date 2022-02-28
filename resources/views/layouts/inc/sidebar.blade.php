<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="# "
            target="_blank">
        @if (Auth::user()->role_as == '1')

        @if(Auth::user()->avatar)
            <img src="{{asset('/uploads/avatars/'.Auth::user()->avatar)}}" class="navbar-brand-img rounded h-100" alt="main_logo">
        @else
            <img src="{{asset('/uploads/avatars/default.jpg')}}" class="navbar-brand-img rounded h-100" alt="main_logo">
        @endif
            <span class="font-weight-bold text-white">Admin's Dashboard</span>
        @else
        @if(Auth::user()->avatar)
            <img src="{{asset('/uploads/avatars/'.Auth::user()->avatar)}}" class="navbar-brand-img rounded h-100" alt="main_logo">
            <span class="font-weight-bold text-white"> {{ Auth::user()->name }}</span>
        @else
            <img src="{{asset('/uploads/avatars/default.jpg')}}" class="navbar-brand-img rounded h-100" alt="main_logo">
            <span class="font-weight-bold text-white"> {{ Auth::user()->name }}</span>
            @endif

        @endif
        </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if (Auth::user()->role_as == '1')
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-gradient-primary':''}}" href="{{url('dashboard')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('users') ? 'active bg-gradient-primary':''}}" href="{{url('users')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('profile') ? 'active bg-gradient-primary':''}}" href="{{url('profile')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('categories') ? 'active bg-gradient-primary':''}}" href="{{url('categories')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-category') ? 'active bg-gradient-primary':''}}" href="{{url('add-category')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('products') ? 'active bg-gradient-primary':''}}" href="{{url('products')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-product') ? 'active bg-gradient-primary':''}}" href="{{url('add-product')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Products</span>
                </a>
            </li>
            @elseif (Auth::user()->role_as == '2')
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-gradient-primary':''}}" href="{{url('dashboard')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('profile') ? 'active bg-gradient-primary':''}}" href="{{url('profile')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('users') ? 'active bg-gradient-primary':''}}" href="{{url('users')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('categories') ? 'active bg-gradient-primary':''}}" href="{{url('categories')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-category') ? 'active bg-gradient-primary':''}}" href="{{url('add-category')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('products') ? 'active bg-gradient-primary':''}}" href="{{url('products')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-product') ? 'active bg-gradient-primary':''}}" href="{{url('add-product')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Products</span>
                </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('profile') ? 'active bg-gradient-primary':''}}" href="{{url('profile')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            @endif


            <h6 class="ps-4 ms-2 text-uppercase text-xs mt-2 text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="{{url('/')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">home</i>
                </div>
                <span class="nav-link-text ms-1">Home</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="{{url('cart')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">shopping_cart</i>
                </div>
                <span class="nav-link-text ms-1">My Cart</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">logout</i>
                </div>
                <span class="nav-link-text ms-1">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    {{-- <script>
    $(function(){
        $('a').click(function(){
            $('a.active').removeClass('active');
            $(this).addClass('active');
        });
    });
    </script> --}}


</aside>
