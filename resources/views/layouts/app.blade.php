<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid light-blue">
    <!-- Normal Navbar for Large Screens -->
    <nav class="navbar navbar-expand-md d-none d-md-flex">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img class="w-100px" src="{{asset('imges/Project Banners.png')}}" alt="Project banner" />
            </a>
            <div class="collapse navbar-collapse">
                <form class="d-flex">
                    <input class="form-control me-2" style="width: 300px;" type="text" placeholder="Search For Jobs">
                    <button class="btn" style="background-color: #0D47A1; color:white;" type="button">Search</button>
                </form>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home"><b style="color:#0D47A1;">Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Jobs"><b style="color:#0D47A1;">Jobs</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/myapplications"><b style="color:#0D47A1;">My Applications</b></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                        @guest
                            <!-- Show empty profile circle for guests -->
                                <ul class="d-flex">
                                    <li class="nav-item" style="list-style-type: none;">
                                        <a class="nav-link" href="/login" 
                                        style="border-radius: 5px; background-color: #0D47A1; color: white; padding: 10px 15px; display: inline-flex; align-items: center;">
                                            Log in <i class="fas fa-sign-in-alt" style="margin-left: 5px;"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item ms-1" style="list-style-type: none;">
                                        <a class="nav-link" href="/register" 
                                        style="border-radius: 5px; background-color: #0D47A1; color: white; padding: 10px 15px; display: inline-flex; align-items: center;">
                                            Register <i class="fas fa-user-plus" style="margin-left: 5px;"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-3" style="list-style-type: none;">
                                        <img class="rounded-circle d-inline-block" style="width: 40px; height: 40px;" src="{{asset('imges/user.png')}}" alt="guest user" />
                                    </li>
                                </ul>
                        @else
                            <!-- Show user profile picture for logged-in users -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default-profile.png') }}" alt="Profile Picture" class="rounded-circle" width="40" height="40">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">View Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>

    <!-- Toggle Button and Offcanvas Sidebar for Smaller Screens -->
    <nav class="navbar navbar-expand-sm d-md-none">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/home">
                    <img class="w-100px" src="{{asset('imges/Project Banners.png')}}" alt="Project banner" />
                </a>
                <ul class="navbar-nav ms-auto">
                        @guest
                            <!-- Show empty profile circle for guests -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="rounded-circle bg-light d-inline-block" style="width: 40px; height: 40px;"></div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </li>
                        @else
                            <!-- Show user profile picture for logged-in users -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default-profile.png') }}" alt="Profile Picture" class="rounded-circle" width="40" height="40">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">View Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header d-flex  flex-column align-items-center">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Find a job</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex  flex-column align-items-center ">
            <img class="w-100px" src="{{asset('imges/Project Banners.png')}}" alt="Project banner" />
            <form class="d-flex mb-3">
                <input class="form-control me-2" style="width: 100%;" type="text" placeholder="Search For Jobs">
                <button class="btn" style="background-color: #0D47A1; color:white;" type="button">Search</button>
            </form>
            <ul class="navbar-nav d-flex  flex-column align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/home"><b style="color:#0D47A1;">Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Jobs"><b style="color:#0D47A1;">Jobs</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myapplications"><b style="color:#0D47A1;">My Applications</b></a>
                </li>
            </ul>
        </div>
    </div>
</div>


        <main class="pb-4">
            @yield('content')
        </main>
        <div class="container-fluid navy-blue">
            <div class="row mx-4 my-3 justify-content-between">
                <div class="col-lg-3 d-flex flex-column justify-content-center align-items-center">
                    <img class="nav-img-width" src="{{asset('imges/Project Banners.png')}}" alt="banner image">
                    <p class="fs-lg-2 text-light text-center text-bold w-300px">Find a Job: Connecting Talented Professionals with Exceptional Career Opportunities for Over 75 Years. Start Your Journey to Success Today.</p>
                </div>
                <div class="col-lg-3 mt-5">
                    <p class="fs-3 text-bold text-white">Contact us</p>
                    <div class="ms-4">
                        <p class="fs-5 text-bold text-white ms-2">Call:</p>
                        <p class="text-white ms-5" style="margin-top: -10px;">091 11 22 1234</p>
                    </div>
                    <div class="ms-4">
                        <p class="fs-5 text-bold text-white ms-2">Email:</p>
                        <p class="text-white ms-5" style="margin-top: -10px;">thathsraarumapperuma@gmail.com</p>
                    </div>
                    <div class="ms-4">
                        <p class="fs-5 text-bold text-white ms-2">Address:</p>
                        <p class="text-white ms-5" style="margin-top: -10px;">Soratha Mawatha,</p>
                        <p class="text-white ms-5" style="margin-top: -10px;">Gangodawila,</p>
                        <p class="text-white ms-5" style="margin-top: -10px;">Nugegoda,</p>
                        <p class="text-white ms-5" style="margin-top: -10px;">Sri-Lanka.</p>
                    </div>
                </div>
                <div class="col-lg-3 mt-5">
                    <p class="fs-3 text-bold text-white">Important Links</p>
                    <div class="ms-5">
                        <p class="fs-4 text-white">Home</p>
                        <p class="fs-4 text-white mt-2">Jobs</p>
                        <p class="fs-4 text-white mt-2">About us</p>
                        <p class="fs-4 text-white mt-2">FAQs</p>
                        <p class="fs-4 text-white mt-2">Career Advice</p>
                    </div>
                </div>
                <div class="col-lg-3 mt-5 text-center">
                    <p class="fs-5 text-white text-bold">Find a Job PVT. Ltd</p>
                    <div class="d-flex justify-content-center">
                        <img class="w-50px m-2" src="{{asset('imges/social-media/1.png')}}" alt="facebook">
                        <img class="w-50px m-2" src="{{asset('imges/social-media/2.png')}}" alt="twitter">
                        <img class="w-50px m-2" src="{{asset('imges/social-media/3.png')}}" alt="linkedin">
                        <img class="w-50px m-2" src="{{asset('imges/social-media/4.png')}}" alt="instagram">
                    </div>
                </div>
            </div>
            <hr style="border-color: white; border-width: 1px; margin: 0;">
            <div class="navy-blue">
                <div class="d-flex align-items-center justify-content-between m-2">
                    <p class="fs-5 text-white text-bold p-2">2024 Find a Job PVT. LTD</p>
                    <p class="fs-5 text-white text-bold">© All Rights Reserved by Strom<sup>TM</sup></p>
                    <img class="w-50px" src="{{asset('imges/Project logos.png')}}" alt="logo">
                </div>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
