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
          <div class="container-fluid px-2 px-md-4">
              <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
              </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
              <div class="row gx-4 mb-2">
                <div class="col-auto">
                  <div class="avatar avatar-xl position-relative">
                    @if(Auth::user()->avatar)
                    <img src="{{asset('/uploads/avatars/'.Auth::user()->avatar)}}" alt="profile_image" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    @else
                    <img src="{{asset('/uploads/avatars/default.jpg')}}" alt="profile_image" alt="profile_image" class="w-100 border-radius-lg shadow-sm">

                    @endif
                    {{-- <img src="/uploads/avatars/{{ Auth::user()->avatar}} " alt="profile_image" class="w-100 border-radius-lg shadow-sm"> --}}
                  </div>
                </div>
                <div class="col-auto my-auto">
                  <div class="h-100">
                    <h5 class="mb-1">
                      {{ Auth::user()->name}}
                    </h5>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col">
                    <div class="card card-plain  h-100">
                      <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Edit Profile Pic</h6>
                        <form enctype="multipart/form-data" action="{{ route('update-img') }}" method="POST" class="">
                          <input type="file" name="avatar" class="mb-1">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-primary btn-sm mb-0 ">Upload</button>

                        </form>
                      </div>
                      <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Edit Profile</h6>
                        <p class="text-xs text-danger">* Fields can't be blank</p>
                      </div>
                      <div class="card-body  p-3 ">
                        @if (session('status'))
                        <div class="alert alert-success col-5" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif
                         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                       @endif
                        <form method="POST" action="{{ route('update-profile') }}" >
                          @csrf
                          <!-- Username input -->
                          {{-- <div class="form-outline mb-4 col-10 ">
                            <input type="text" id="form6Example1" class="form-control text-center" />
                            <label class="form-label" for="form6Example1">Username</label>
                          </div> --}}
                        
                          <!-- Password input -->
                          {{-- <div class="form-outline mb-4 col-11">
                            <input type="password" id="form3Example4" class="form-control text-center @error('password') is-invalid @enderror" name="old-password" required autocomplete="current-password" name="password"/>
                            <label class="form-label" for="form3Example4">Old Password</label>
                          </div> --}}

                          <div class="form-outline mb-4 col-11">
                            <input type="password" id="form3Example4" class="form-control text-center @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password" name="password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label class="form-label" for="form3Example4">Password</label>
                          </div>

                          <!-- Email input -->
                          <div class="form-outline mb-4 col-11">
                            <input type="email" name="email" id="form6Example5" class="form-control text-center  @error('email') is-invalid @enderror" name="email" required autocomplete="email"  value="{{ Auth::user()->email }}" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label class="form-label" for="form6Example5">Email</label>
                          </div>
                        
                          <!-- Text input -->
                          <div class="form-outline mb-4 col-11">
                            <input type="text" name="address" id="form6Example4" class="form-control text-center" value="{{ Auth::user()->address }}"/>
                            <label class="form-label" for="form6Example4">Address</label>
                          </div>
                        
                          <!-- Number input -->
                          <div class="form-outline mb-4 col-11">
                            <input type="tel" name="phone" id="typePhone" class="form-control text-center @error('phone') is-invalid @enderror" name="phone"   data-mdb-showcounter="true" maxlength="11" value="{{ Auth::user()->phone }}"/>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label class="form-label " for="typePhone">Phone Number</label>
                          </div>
                        
                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-sm ">Save Changes</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card card-plain h-100">
                      <div class="card-header pb-0 p-3">
                        <div class="row">
                          <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Profile Information</h6>
                          </div>
                          
                        </div>
                      </div>
                      <div class="card-body p-3">
                        <p class="text-sm">
                          Hi, I’m {{ Auth::user()->name}} , Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="list-group">
                          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Name:</strong> &nbsp;{{ Auth::user()->name}}</li>
                          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Mobile:</strong>&nbsp;{{ Auth::user()->phone}}</li>
                          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;{{ Auth::user()->email}}</li>
                          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp;{{ Auth::user()->address }}</li>
                          <li class="list-group-item border-0 pt-0 ps-0 pb-0">
                            <strong class="text-dark text-sm">Social:</strong>
                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                              <i class="fab fa-facebook fa-lg"></i>
                            </a>
                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                              <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                              <i class="fab fa-instagram fa-lg"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
            </div>
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

  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  
  @yield('scripts')

</body>
</html>
