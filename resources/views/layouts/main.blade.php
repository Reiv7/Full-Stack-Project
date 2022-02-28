<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Main Style Sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- facncy box -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">
        <!-- Bootstrap -->
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
        <!--Jq-UI-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


        <title>
            @yield('title')
        </title>
    </head>
<body>
    @include('layouts.maininc.mainhead')
    <main>
        @yield('content')


    </main>
    @include('layouts.maininc.mainfooter')
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"defer></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
          var availableTags = [];
          $.ajax({
            method:"GET",
            url:"/product-list",
            success: function(response){
                // console.log(response);
                startAutoComplete(response);
            }
        });
        function startAutoComplete(availableTags)
        {
            $( "#form1" ).autocomplete({
            source: availableTags,
                select: function(event, ui) {
                    var item = ui.item;
                    console.log(item,ui)
                    if(item) {
                        $(this).val(item.value);
                        $(this.form).submit();
                    }
                }
            });


        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script> <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- mixitup pluging -->
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <!-- fancybox pluging- -->
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>


    <!-- main.js -->
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('status'))
    <script>
        swal.fire("{{ session('status') }}");
    </script>
    @endif
    @yield('scripts')


</body>
</html>
