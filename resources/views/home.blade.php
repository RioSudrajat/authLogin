<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <!-- Add favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>GreenV | Website</title>
</head>
<body class="bg-white -100" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">
    
    <!-- --------------- HEADER --------------- -->
    <nav id="header" :class="{ 'bg-opacity-70': scrollY > 50, 'bg-opacity-100': scrollY <= 50 }" class="fixed top-0 left-0 right-0 flex justify-between items-center backdrop-filter backdrop-blur-lg bg-opacity-80 h-24 py-4 transition-all duration-300 z-50 px-4 md:px-8">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('user/images/logo1.png') }}" class="w-12 h-12 mr-2" alt="Logo"/>
            <p class="text-3xl text-gray-700 font-semibold">GreenV</p>
        </div>
        <div class="hidden md:flex flex-grow justify-center items-center space-x-8">
            <a href="{{ url('/') }}" 
            class="text-gray-600 hover:text-gray-800 font-medium" 
            :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/') }}' }">Home</a>
            <a href="{{ url('/education') }}" 
            class="text-gray-600 hover:text-gray-800 font-medium" 
            :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/education') }}' }">Education</a>
            <a href="{{ url('/laporan') }}" 
            class="text-gray-600 hover:text-gray-800 font-medium" 
            :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/laporan') }}' }">Report</a>
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
    
    <!-- Hero Section -->
    <section id="projects" class="min-h-screen flex items-center relative mt-24">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('user/images/bg1.png') }}');">
            <div class="flex flex-col items-center justify-center text-center h-full bg-black bg-opacity-50">
                <h1 class="text-6xl font-bold text-white mb-6">Green Environment</h1>
                <p class="text-2xl text-white mb-6">Menjaga lingkungan agar tetap asri dan tetap menjadi tempat yang <br> nyaman bagi seluruh mahluk hidup</p>
            </div>
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none" class="absolute bottom-0 left-0 w-full">
                <path d="M0 50L14.2 55C28.3 60 56.7 70 84.8 74.5C113 79 141 78 169.2 76.2C197.3 74.3 225.7 71.7 254 69.3C282.3 67 310.7 65 339 64.7C367.3 64.3 395.7 65.7 423.8 66.8C452 68 480 69 508.2 72.5C536.3 76 564.7 82 593 82.3C621.3 82.7 649.7 77.3 677.8 69.3C706 61.3 734 50.7 762.2 47.5C790.3 44.3 818.7 48.7 847 55.3C875.3 62 903.7 71 931.8 76.7C960 82.3 988 84.7 1016.2 85.7C1044.3 86.7 1072.7 86.3 1101 86C1129.3 85.7 1157.7 85.3 1186 79.5C1214.3 73.7 1242.7 62.3 1270.8 57.7C1299 53 1327 55 1355.2 60.5C1383.3 66 1411.7 75 1425.8 79.5L1440 84L1440 101L1425.8 101C1411.7 101 1383.3 101 1355.2 101C1327 101 1299 101 1270.8 101C1242.7 101 1214.3 101 1186 101C1157.7 101 1129.3 101 1101 101C1072.7 101 1044.3 101 1016.2 101C988 101 960 101 931.8 101C903.7 101 875.3 101 847 101C818.7 101 790.3 101 762.2 101C734 101 706 101 677.8 101C649.7 101 621.3 101 593 101C564.7 101 536.3 101 508.2 101C480 101 452 101 423.8 101C395.7 101 367.3 101 339 101C310.7 101 282.3 101 254 101C225.7 101 197.3 101 169.2 101C141 101 113 101 84.8 101C56.7 101 28.3 101 14.2 101L0 101Z" fill="#fff" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg>
        </div>
    </section>

    <div class="bg-gradient-to-b from-white to-gray-800">
    <div class="container mx-auto px-4">
        <body class="text-gray-900 font-sans">
            <div class="w-full h-full flex flex-col items-center justify-center">
                <div class="text-center mt-12 mb-12 w-full">
                    <h1 class="text-3xl font-bold mb-8">Apa tujuan GreenV?</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 px-4 w-full">
                        <div class="text-center  border border-gray-800 p-4 rounded-lg shadow-sm">
                            <img src="{{ asset('user/images/ko.png') }}"  class="mx-auto w-40 h-40 object-contain">
                            <h1 class="text-xl font-semibold mt-4">Mengedukasi</h1>
                            <p class="mt-2">Memberikan edukasi terkait bahaya sampah plastik dan cara penanggulangannyaMemberikan edukasi terkait bahaya sampah plastik dan cara penanggulangannyaMemberikan edukasi terkait bahaya sampah plastik dan cara penanggulangannya</p>
                        </div>
                        <div class="text-center border border-gray-800 p-4 rounded-lg shadow-sm">
                            <img src="{{ asset('user/images/ko.png') }}"  class="mx-auto w-40 h-40 object-contain">
                            <h1 class="text-xl font-semibold mt-4">Membantu</h1>
                            <p class="mt-2">Memberikan bantuan dalam bentuk digital</p>
                        </div>
                        <div class="text-center border border-gray-800 p-4 rounded-lg shadow-sm">
                            <img src="{{ asset('user/images/ko.png') }}"  class="mx-auto w-40 h-40 object-contain">
                            <h1 class="text-xl font-semibold mt-4">Mengingatkan</h1>
                            <p class="mt-2">Mengingatkan masyarakat untuk tetap peduli akan lingkungan terhadap sampah plastik</p>
                        </div>
                        <div class="text-center border border-gray-800 p-4 rounded-lg shadow-sm">
                            <img src="{{ asset('user/images/ko.png') }}" class="mx-auto w-40 h-40 object-contain">
                            <h1 class="text-xl font-semibold mt-4">Merawat</h1>
                            <p class="mt-2">Merawat lingkungan sekitar dari banyaknya sampah plastik</p>
                        </div>
                    </div>
                </div>
            </div>
        </body>

      
        <div class="text-center mt-12 mb-12 w-full">
            <h1 class="text-3xl font-bold mb-8 text-white"> - Our Team - </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-4">
            <!-- Testimonial 1 -->
            <div class="shadow-md rounded-lg border border-[#F7F7F7] p-8 mb-4">
                <p class="text-2xl font-medium mb-12 text-white text-center">“UI/UX”</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-cover bg-center rounded-full mr-4" style="background-image: url('{{ asset('user/images/bg1.png') }}');"></div>
                    <div>
                        <p class="text-lg font-medium text-white">Nama : saha</p>
                        <p class="text-lg text-white">NIM :</p>
                    </div>
                </div>
            </div>
        
            <!-- Testimonial 2 -->
            <div class="shadow-md rounded-lg border border-[#F7F7F7] p-8 mb-4">
                <p class="text-2xl font-medium mb-12 text-white text-center">“Front End”</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-cover bg-center rounded-full mr-4" style="background-image: url('{{ asset('user/images/bg1.png') }}');"></div>
                    <div>
                        <p class="text-lg font-medium text-white">Nama : </p>
                        <p class="text-lg  text-white">NIM : </p>
                    </div>
                </div>
            </div>
        
            <!-- Testimonial 3 -->
            <div class="shadow-md rounded-lg border border-[#F7F7F7] p-8 mb-4">
                <p class="text-2xl font-medium mb-12 text-white text-center">“Back End”</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-cover bg-center rounded-full mr-4" style="background-image: url('{{ asset('user/images/bg1.png') }}');"></div>
                    <div>
                        <p class="text-lg font-medium text-white">Nama : </p>
                        <p class="text-lg text-white">NIM : </p>
                    </div>
                </div>
            </div>
        
            <!-- Testimonial 1 -->
            <div class="shadow-md rounded-lg border border-[#F7F7F7] p-8 mb-4">
                <p class="text-2xl font-medium mb-12 text-white text-center">“UI/UX”</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-cover bg-center rounded-full mr-4" style="background-image: url('{{ asset('user/images/bg1.png') }}');"></div>
                    <div>
                        <p class="text-lg font-medium text-white">Nama : </p>
                        <p class="text-lg  text-white">NIM : </p>
                    </div>
                </div>
            </div>
        
            <!-- Testimonial 2 -->
            <div class="shadow-md rounded-lg border border-[#F7F7F7] p-8 mb-4">
                <p class="text-2xl font-medium mb-12 text-white text-center">Front End”</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-cover bg-center rounded-full mr-4" style="background-image: url('{{ asset('user/images/bg1.png') }}');"></div>
                    <div>
                        <p class="text-lg font-medium text-white">Nama : </p>
                        <p class="text-lg  text-white">NIM : </p>
                    </div>
                </div>
            </div>
        
            <!-- Testimonial 3 -->
            <div class="shadow-md rounded-lg border border-[#F7F7F7] p-8 mb-4">
                <p class="text-2xl font-medium mb-12 text-white text-center">“Back End”</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-cover bg-center rounded-full mr-4" style="background-image: url('{{ asset('user/images/bg1.png') }}');"></div>
                    <div>
                        <p class="text-lg font-medium text-white">Nama : </p>
                        <p class="text-lg  text-white">NIM : </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Footer goes here -->
        {{-- <div class="bg-gradient-to-b from-gray-800 to-black p-4"> --}}
            <div class="border-b border-[#E6E6E6] mb-12"></div>
            <div class="flex justify-between max-w-[1134px] mx-auto text-white">
                <div>
                    <h2 class="text-2xl font-medium mb-24">Site name</h2>
                    <div class="flex space-x-4">
                        <img src="{{ asset('user/images/logo1.png') }}" class="w-12 h-12 mr-2" alt="Logo"/>
                        <img src="{{ asset('user/images/logo1.png') }}" class="w-12 h-12 mr-2" alt="Logo"/>
                        <img src="{{ asset('user/images/logo1.png') }}" class="w-12 h-12 mr-2" alt="Logo"/>
                        <img src="{{ asset('user/images/logo1.png') }}" class="w-12 h-12 mr-2" alt="Logo"/>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Column 1</h3>
                    <p class="text-lg mb-2 text-white">Link 1</p>
                    <p class="text-lg mb-2 text-white">Link 2</p>
                    <p class="text-lg mb-2 text-white">Link 3</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Column 2</h3>
                    <p class="text-lg mb-2 text-white">Link 1</p>
                    <p class="text-lg mb-2 text-white">Link 2</p>
                    <p class="text-lg mb-2 text-white">Link 3</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Column 3</h3>
                    <p class="text-lg mb-2 text-white">Link 1</p>
                    <p class="text-lg mb-2 text-white">Link 2</p>
                    <p class="text-lg mb-2 text-white">Link 3</p>
                </div>
            </div>
        {{-- </div> --}}
            {{-- </div> --}}

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
