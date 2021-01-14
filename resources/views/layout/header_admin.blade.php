<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/fonts/css/all.min.css') }}">
		<link rel="icon"  href="{{ asset('admin/images/shopBike.svg') }}">
	</head>

	<body>

		<!-- top nav -->
		 <!-- header -->

    <header class="top-bar sticky-top">
        <div class="container p-3">
            <div class="logo ">
                <a href="#"><h4>your hospital</h4></a>
            </div>
            @if(!Auth::check())
            <div class="float-right">
                @if (url()->current() == route('login') )
                <a href="#">sign in</a>
                @else
                <a href="{{route('login')}}">sign in</a>
                @endif
                @if (url()->current() == route('register') )
                <a href="#">sign up</a>
                @else
                <a href="{{route('register')}}">sign up</a>
                @endif
            </div>
            @else
            <div class="float-right">


                <a href="#">{{ Auth::user()->name }}</a>


                <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>


                {{-- onclick="event.preventDefault();
                document.getElementById('logout-form').submit(); --}}

            </div>
            @endif
        </div>
    </header >
    <!-- end header -->
    <!-- start nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-#e7e7e75e!important ">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="float-left" style="max-width: 40px;" src="{{ asset('admin/icon/info (1).jpg') }}"><span class="nav-item d-inline">
                <a href="#" class="nav-item nav-link"><i class="fas fa-phone fa-flip-horizontal"></i> 01276547898</a>
            </span></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" style="transition: all .6s;" id="navbar">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                {{-- @if(url()->current()==  route('index')) --}}
                            @if (url()->current() == route('index') )
                            <a class="nav-link active mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="#">Home</a>
                            @else
                            <a class="nav-link active mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{ route('index')}}">Home</a>
                            @endif

                            </li>
                            {{-- role user --}}
                            @if(Auth::check() && Auth::user()->role >= 1)
                            <li class="nav-item">
                                @if (url()->current() == route('admin') )
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="#">Admin</a>
                                @else
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{ route('admin')}}">Admin</a>
                                @endif

                            </li>
                            <li class="nav-item">
                                @if (url()->current() == route('doctor') )
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="#">doctor</a>
                                @else
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{ route('doctor')}}">doctor</a>
                                @endif

                            </li>
                            <li class="nav-item">
                                @if (url()->current() == route('user') )
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="#">users</a>
                                @else
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{ route('user')}}">users</a>
                                @endif

                            </li>


                            <li class="nav-item">
                                {{-- @if (url()->current() == route('books') ) --}}
                                <div class="dropdown">
                                    <button type="button" class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1 btn  dropdown-toggle" data-toggle="dropdown">
                                      book now
                                    </button>
                                    <div class="dropdown-menu ">
                                      <a class="dropdown-item nav-link" href="{{route('books', '0')}}">Clild</a>
                                      <a class="dropdown-item nav-link" href="{{route('books', '2')}}">Woman</a>
                                      <a class="dropdown-item nav-link" href="{{route('books', '1')}}">Men</a>
                                    </div>
                                  </div>
                                {{-- @else --}}
                                {{-- <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{ route('books')}}">book now</a>
                                @endif --}}

                            </li>
                            {{-- role user --}}
                            @else
                            <div class="nav-item">
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1"href="{{route('books', '0')}}">book clild</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{route('books', '2')}}">book woman</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link  mb-lg-0 mb-md-1 mb-sm-1 mb-1" href="{{route('books', '1')}}">book men</a>
                            </div>

                            @endif

                        </ul>
						</div>
        </div>
    </nav>
    <!-- end nav bar -->
