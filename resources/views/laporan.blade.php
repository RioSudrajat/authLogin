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
<body class="bg-gray-100" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">

    <div class="container mx-auto px-4">
        <!-- --------------- HEADER --------------- -->
        <nav id="header" :class="{ 'bg-opacity-70': scrollY > 50, 'bg-opacity-100': scrollY <= 50 }" class="fixed top-0 left-0 right-0 flex justify-between items-center backdrop-filter backdrop-blur-lg bg-gray-100 bg-opacity-80 h-24 py-4 transition-all duration-300 z-50 px-4 md:px-8">
            <div class="flex items-center space-x-4">
                <img src="{{asset('user/images/logo1.png')}}" class="w-12 h-12 mr-2" alt="Logo"/>
                <p class="text-3xl font-semibold text-gray-700">GreenV</p>
            </div>
            <div class="hidden md:flex flex-grow justify-center items-center space-x-8">
                <a href="{{url('/')}}" 
                   class="text-gray-600 hover:text-gray-800 font-medium" 
                   :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{url('/')}}' }">Home</a>
                <a href="{{url('/education')}}" 
                   class="text-gray-600 hover:text-gray-800 font-medium" 
                   :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{url('/education')}}' }">Education</a>
                <a href="{{url('/laporan')}}" 
                   class="text-gray-600 hover:text-gray-800 font-medium" 
                   :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{url('/laporan')}}' }">Report</a>
            </div>
            <div class="hidden md:block">
                @auth
                <a href="{{ route('logout') }}" class="btn bg-gray-200 text-gray-700 hover:bg-gray-800 hover:text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="uil uil-sign-out-alt ml-2"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{url('auth/login')}}" class="btn bg-gray-200 text-gray-700 hover:bg-gray-800 hover:text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300">Login <i class="uil uil-file-alt ml-2"></i></a>
            @endauth
    
            </div>
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 focus:outline-none">
                    <i class="uil uil-bars text-2xl"></i>
                </button>
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
    <script>
        // Alpine.js code to update currentPath
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                currentPath: window.location.pathname
            }));
        });
    </script>
</body>
</html>
