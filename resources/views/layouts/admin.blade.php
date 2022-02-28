<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
     <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link 
    rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" 
    />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
    rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">


    
    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">

</head>
<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.inc.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.inc.adminnav')

        <div class="container-fluid py-4">
            @yield('content')
            
            
        </div>
        @include('layouts.inc.adminfooter')
        

    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
          <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
          <div class="card-header pb-0 pt-3">
            <div class="float-start">
              <h5 class="mt-3 mb-0">Material UI Configurator</h5>
              <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
              <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                <i class="material-icons">clear</i>
              </button>
            </div>
            <!-- End Toggle Button -->
          </div>
          <hr class="horizontal dark my-1">
          <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
              <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors my-2 text-start">
                <span class="badge filter bg-gradient-primary active" data-color="primary"
                  onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
              </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
              <h6 class="mb-0">Sidenav Type</h6>
              <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
              <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                onclick="sidebarType(this)">Dark</button>
              <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                onclick="sidebarType(this)">Transparent</button>
              <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-3 d-flex">
              <h6 class="mb-0">Navbar Fixed</h6>
              <div class="form-check form-switch ps-0 ms-auto my-auto">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
              </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
              <h6 class="mb-0">Light / Dark</h6>
              <div class="form-check form-switch ps-0 ms-auto my-auto">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
              </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            
          </div>
        </div>
      </div>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
    ></script>
    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" defer></script>
    <!-- Control Center for Material Dashboard: parallax effects -->
    <script src="{{ asset('admin/js/material-dashboard.min.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('status'))
    <script>
        swal.fire("{{ session('status') }}");
    </script>
    @endif
    
  
  
  @yield('scripts')

</body>
</html>
