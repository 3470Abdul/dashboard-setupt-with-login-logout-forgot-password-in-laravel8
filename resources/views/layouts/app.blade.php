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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" href="{{ url('assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ url('assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">



    <!--- Animations css-->
    <link href="{{ url('assets/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ url('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ url('assets/switcher/demo.css') }}" rel="stylesheet">


</head>

<body class="ltr main-body error-page1 error-3">
        {{-- <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="row w-100">
                        <div class="col">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </ul>
                        </div>
                        <div class="col">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav justify-content-end">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                        </div>

                                        </form>
                                    </li>

                                @endguest
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav> --}}
            @yield('content')

    <!-- JQuery min js -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{ url('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ url('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ url('assets/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ url('assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ url('assets/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ url('assets/js/sticky.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ url('assets/plugins/eva-icons/eva-icons.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ url('assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ url('assets/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ url('assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ url('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ url('assets/plugins/sidebar/sidebar-custom.js') }}"></script>


    <!--Internal  Chart.bundle js -->
    <script src="{{ url('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Internal Apexchart js-->
    <script src="{{ url('assets/js/apexcharts.js') }}"></script>

    <!-- Internal Map -->
    <script src="{{ url('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ url('assets/js/index.js') }}"></script>

    <!-- Apexchart js-->
    <script src="{{ url('assets/js/apexcharts.js') }}"></script>
    <script src="{{ url('assets/js/jquery.vmap.sampledata.js') }}"></script>


    <!--themecolor js-->
    <script src="{{ url('assets/js/themecolor.js') }}"></script>

    <!-- custom js -->
    <script src="{{ url('assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ url('assets/switcher/js/switcher.js') }}"></script>

    {{-- <script src="{{ url('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js') }}"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script> --}}

</body>

</html>
