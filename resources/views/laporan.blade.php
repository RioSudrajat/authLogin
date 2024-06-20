<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>GreenV | Website</title>
</head>
<body class="bg-gray-100" x-data="{ open: false, scrollY: 0 }" @scroll.window="scrollY = window.scrollY">

    <div class="container mx-auto px-4">
        <!-- --------------- HEADER --------------- -->
        <nav id="header" :class="{ 'bg-opacity-70': scrollY > 50, 'bg-opacity-100': scrollY <= 50 }" class="fixed flex justify-between items-center backdrop-filter backdrop-blur-lg bg-gray-100 bg-opacity-80 w-full h-24 py-4 transition-all duration-300 z-50 px-20">
            <div class="nav-logo relative flex items-center">
                <img src="{{asset('user/images/logo1.png')}}" class="w-12 h-12 mr-2" alt="Logo"/>
                <p class="nav-name text-3xl font-semibold text-gray-700">GreenV</p>
                <span class="absolute top-[-15px] right-[-20px] text-5xl text-gray-500">.</span>
            </div>
            <div :class="{ 'flex': open, 'hidden': !open }" class="nav-menu flex-col md:flex md:flex-row md:items-center md:space-x-8">
                <ul class="nav_menu_list flex flex-col md:flex-row space-y-4 md:space-y-0">
                    <li class="nav_list relative">
                        <a href="{{url('/')}}" class="nav-link text-gray-600 hover:text-gray-800 font-medium px-4 mx-5">Home</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list relative">
                        <a href="{{url('/education')}}" class="nav-link text-gray-600 hover:text-gray-800 font-medium px-4 mx-5">Education</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list relative">
                        <a href="{{url('/laporan')}}" class="nav-link text-gray-600 hover:text-gray-800 font-medium px-4 mx-5">Report</a>
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
            <div class="nav-button hidden md:block">
                 <a href="{{url('auth/login')}}" class="btn bg-gray-200 text-gray-700 hover:bg-gray-800 hover:text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300">Login <i class="uil uil-file-alt ml-2"></i></a>
            </div>

            <div class="nav-menu-btn md:hidden" @click="open = !open">
                <i class="uil uil-bars text-2xl text-gray-700"></i>
            </div>
        </nav>

        <!-- Other sections go here -->
        <section id="home" class="min-h-screen flex items-center justify-center">
            <h1 class="text-5xl font-bold text-gray-700">Welcome to my Portfolio</h1>
        </section>
        <section id="about" class="min-h-screen flex items-center justify-center">
            <h1 class="text-5xl font-bold text-gray-700">About Me</h1>
        </section>
        <section id="projects" class="min-h-screen flex items-center justify-center">
            <h1 class="text-5xl font-bold text-gray-700">My Projects</h1>
        </section>
        <section id="contact" class="min-h-screen flex items-center justify-center">
            <h1 class="text-5xl font-bold text-gray-700">Contact Me</h1>
        </section>

        <!-- Footer goes here -->

    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
