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
        <nav id="header" :class="{ 'bg-opacity-70': scrollY > 50, 'bg-opacity-100': scrollY <= 50 }" class="fixed top-0 left-0 right-0 flex justify-between items-center backdrop-filter backdrop-blur-lg bg-opacity-80 h-24 py-4 transition-all duration-300 z-50 px-4 md:px-8">
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


        
            <section class="bg-white dark:bg-gray-900">
                <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative mt-24">
                    <div class="place-self-center mr-auto lg:col-span-7">
                        <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">GreenV Edukasi</h1>
                        <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ asset('user/images/ko.png') }}" alt="mockup">
                    </div>                
                </div>
            </section>

            {{-- Edukasi --}}
        <div class="flex flex-wrap pt-12 -mx-auto max-w-7xl  py-12 px-4 sm:px-6 lg:px-8 border border-Black">
        <!-- Apa itu Sampah? -->
        <div class="mb-5 border-b border-white pb-8">
            <h2 class="text-2xl font-bold mb-4">Apa itu Sampah?</h2>
            <p class="mb-6 text-lg">Sampah adalah bahan atau barang yang sudah tidak digunakan lagi dan dibuang oleh manusia. Sampah dapat berasal dari berbagai aktivitas seperti rumah tangga, industri, pertanian, dan lainnya.</p>
        </div>

        <!-- Jenis-Jenis Sampah -->
        <div class="mb-5 border-b border-white pb-8">
            <h2 class="text-2xl font-bold mb-4">Jenis-Jenis Sampah</h2>
            <p class="mb-6 text-lg">Sampah dapat diklasifikasikan berdasarkan sumbernya dan sifatnya:</p>
            <div class="ml-4 space-y-2">
                <p><strong>Berdasarkan Sumbernya:</strong></p>
                <ul class="list-disc ml-8">
                    <li>Sampah Rumah Tangga: Sisa makanan, plastik, kertas, dan lain-lain.</li>
                    <li>Sampah Industri: Limbah pabrik, bahan kimia, logam.</li>
                    <li>Sampah Pertanian: Sisa tanaman, pupuk, pestisida.</li>
                    <li>Sampah Komersial: Sampah dari toko, pasar, restoran.</li>
                </ul>
                <p class="mt-4"><strong>Berdasarkan Sifatnya:</strong></p>
                <ul class="list-disc ml-8">
                    <li>Sampah Organik: Bahan yang bisa terurai secara alami, seperti sisa makanan, daun, dan kertas.</li>
                    <li>Sampah Anorganik: Bahan yang tidak bisa terurai secara alami atau memerlukan waktu yang sangat lama, seperti plastik, kaca, dan logam.</li>
                    <li>Sampah B3 (Bahan Berbahaya dan Beracun): Limbah yang berbahaya bagi kesehatan manusia dan lingkungan, seperti baterai, obat-obatan, bahan kimia.</li>
                </ul>
            </div>
        </div>

        <!-- Dampak Lingkungan dari Sampah -->
        <div class="mb-5 border-b border-white pb-8">
            <h2 class="text-2xl font-bold mb-4">Dampak Lingkungan dari Sampah</h2>
            <ul class="list-disc ml-4 space-y-2">
                <li>Pencemaran Tanah: Sampah yang tidak dikelola dengan baik dapat mencemari tanah dan mengganggu kesuburannya.</li>
                <li>Pencemaran Air: Sampah yang dibuang ke sungai atau laut dapat mencemari air, membahayakan ekosistem air, dan kesehatan manusia.</li>
                <li>Pencemaran Udara: Pembakaran sampah terutama sampah plastik dapat menghasilkan gas beracun yang mencemari udara.</li>
                <li>Gangguan Kesehatan: Sampah yang menumpuk dapat menjadi sarang penyakit dan mengundang hama seperti tikus dan lalat.</li>
            </ul>
        </div>

        <!-- Pengelolaan Sampah -->
        <div class="mb-5 border-b border-white pb-8">
            <h2 class="text-2xl font-bold mb-4">Pengelolaan Sampah</h2>
            <p class="mb-6 text-lg">Pengelolaan sampah meliputi serangkaian kegiatan yang dilakukan untuk menangani sampah dari sumber hingga pemrosesan akhir:</p>
            <ol class="list-decimal ml-4 space-y-2">
                <li><strong>Pengurangan (Reduce)</strong>: Mengurangi penggunaan barang sekali pakai dan menggantinya dengan barang yang lebih tahan lama dan dapat digunakan berulang kali.</li>
                <li><strong>Penggunaan Kembali (Reuse)</strong>: Menggunakan kembali barang-barang yang masih layak pakai untuk fungsi yang sama atau fungsi lain.</li>
                <li><strong>Daur Ulang (Recycle)</strong>: Mengolah sampah menjadi produk baru yang dapat digunakan kembali.</li>
                <li><strong>Pengomposan (Composting)</strong>: Mengolah sampah organik menjadi kompos yang dapat digunakan sebagai pupuk alami.</li>
                <li><strong>Pengolahan Akhir</strong>: Melakukan pengelolaan akhir seperti insinerasi atau sanitary landfill.</li>
            </ol>
        </div>

        <!-- Peran Individu dalam Pengelolaan Sampah -->
        <div>
            <h2 class="text-2xl font-bold mb-4">Peran Individu dalam Pengelolaan Sampah</h2>
            <ul class="list-decimal ml-4 space-y-2">
                <li>Membawa tas belanja sendiri untuk mengurangi penggunaan kantong plastik.</li>
                <li>Memilah sampah organik dan anorganik di rumah.</li>
                <li>Menggunakan barang-barang yang bisa diisi ulang seperti botol minum.</li>
                <li>Mengurangi pembelian barang yang tidak diperlukan.</li>
                <li>Mendukung program daur ulang dan pengelolaan sampah di komunitas.</li>
            </ul>
            <p class="mt-4">Dengan kesadaran dan tindakan nyata dari setiap individu, pengelolaan sampah yang efektif dapat terwujud dan dampak negatif terhadap lingkungan dapat diminimalkan.</p>
        </div>
    </div>

            <!--Posts Container-->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-wrap justify-between pt-12 -mx-6">

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1  rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{ asset('user/images/bg1.png') }}" class="h-64 w-full object-cover rounded-lg pb-6">
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto  rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">2024</p>
							</div>
						</div>
					</div>
                </div>

				<div class="flex flex-wrap justify-between pt-12 -mx-6">
					<!--2/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1  rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{ asset('user/images/bg1.png') }}" class="h-64 w-full object-cover rounded-lg pb-6">
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto  rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">2024</p>
							</div>
						</div>
					</div>
                </div>
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

					<!--3/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1  rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{ asset('user/images/bg1.png') }}" class="h-64 w-full object-cover rounded-lg pb-6">
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto  rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">2024</p>
							</div>
						</div>
					</div>
                </div>
        </div>

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
