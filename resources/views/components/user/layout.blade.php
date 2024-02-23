<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home | Digisa - Digital Arsip Suara 'Aisyiyah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="A fully responsive Tailwind CSS Multipurpose agency, application, business, clean, creative, cryptocurrency, it solutions, startup, career, blog, modern, creative, multipurpose, portfolio, saas, software, tailwind css, etc."
        name="description" />
    <meta content="coderthemes" name="author" />

    <!-- Theme favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    <!--Swiper slider css-->
    <link href="{{ asset('front/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="{{ asset('front/libs/aos/aos.css') }}" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="{{ asset('front/css/style.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('front/css/icons.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="text-gray-800">

    <!-- =========== Navbar Start =========== -->
    <header id="navbar"
        class="light fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="{{ route('public.home') }}">
                    <img src="{{ asset('front/images/logo-dark.png') }}" class="h-12 logo-dark" alt="Logo Dark" />
                    <img src="{{ asset('front/images/logo-light.png') }}" class="h-12 logo-light" alt="Logo Light" />
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block ms-auto">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                        <!-- Home Page Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('public.home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.transactions') }}">Transaksi</a>
                        </li>

                        <!-- Contact Page Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="">Bantuan</a>
                        </li>

                        @if (auth()->check() && auth()->user()->role_id == 2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.dashboard') }}">Dasbor</a>
                            </li>

                    </ul>

                </div>

                <!-- Logout Button -->
                <div class="hidden lg:flex items-center ms-3">
                    <a href="{{ route('user.logout') }}"
                        class="bg-green-500 hover:bg-green-400 text-white px-4 py-2 rounded inline-flex items-center text-sm">Logout</a>
                </div>
            @else
                </ul>

        </div>

        <!-- Download Button -->
        <div class="hidden lg:flex items-center ms-3">
            <a href="{{ route('public.login') }}"
                class="bg-green-500 hover:bg-green-400 text-white px-4 py-2 rounded inline-flex items-center text-sm">Login</a>
        </div>
        @endif

        <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
        <div class="lg:hidden flex items-center ms-auto px-2.5">
            <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
            </button>
        </div>
        </nav>
        </div>
    </header>
    <!-- =========== Navbar End =========== -->

    <!-- =========== Mobile Menu Start (Offcanvas) =========== -->
    <div id="mobileMenu"
        class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
        <div class="flex flex-col h-full divide-y-2 divide-gray-200">
            <!-- Mobile Menu Topbar Logo (Header) -->
            <div class="p-6 flex items-center justify-between">
                <a href="{{ route('public.home') }}">
                    <img src="{{ asset('front/images/logo-dark.png') }}" class="h-8" alt="Logo" />
                </a>

                <button data-fc-dismiss class="flex items-center px-2">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu Link List -->
            <div class="p-6 overflow-scroll h-full">
                <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="{{ route('public.home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.transactions') }}" class="nav-link">Transaksi</a>
                    </li>
                    <!-- Contact Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="">Tentang Kami</a>
                    </li>
                    <!-- Contact Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="">Bantuan</a>
                    </li>

                    @if (auth()->check() && auth()->user()->role_id == 2)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.profile') }}">Profil</a>
                        </li>
                </ul>
            </div>
             <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
          <a href="{{ route('user.logout') }}"
              class="bg-green-500 hover:bg-green-400 w-full text-white p-3 rounded flex items-center justify-center text-sm">Logout</a>
      </div>

        @else
            </ul>
        </div>
        <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
            <a href="{{ route('public.login') }}"
                class="bg-green-500 hover:bg-green-400 w-full text-white p-3 rounded flex items-center justify-center text-sm">Login</a>
        </div>
        @endif
    </div>
    </div>
    <!-- =========== Mobile Menu End =========== -->

    {{ $slot }}


    <!-- =========== footer Section start =========== -->
    <footer class="bg-gray-100">
        <div class="container">
            <div class="grid xl:grid-cols-5 gap-6 py-12">
                <div class="xl:col-span-2">
                    <a href="index.html">
                        <img src="{{ asset('front/images/logo-dark.png') }}" class="h-8" />
                    </a>
                    <p class="text-gray-500/80 mt-5 lg:w-4/5">
                        Digital Assets Majalah Suara 'Aisyiyah
                    </p>
                </div>
                <div class="xl:col-span-3 col-span-4">
                    <div class="flex flex-col sm:flex-row gap-6 flex-wrap justify-between">
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Profil</h5>
                                <div class="text-gray-500/80">
                                    <a href="javascript:void(0);">Tentang Kami</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="javascript:void(0);">Kontak</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="javascript:void(0);">Blog</a>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Akses</h5>
                                <div class="text-gray-500/80">
                                    <a href="javascript:void(0);">Kumpulan Arsip</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="javascript:void(0);">Login</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="javascript:void(0);">Daftar</a>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Kantor</h5>
                                <div class="text-gray-500/80">
                                    <i class="fas fa-map-marker-alt"></i> Kauman Gm I/17A Yogyakarta 55122
                                </div>
                                <div class="text-gray-500/80">
                                    <i class="fas fa-envelope"></i> digisa@suaraaisyiyah.id
                                </div>
                                <div class="text-gray-500/80">
                                    <i class="fas fa-phone"></i> (0274) 373263
                                </div>
                                <div class="text-gray-500/80">
                                    <i class="fab fa-whatsapp"></i> 0817 270 787
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="border-t py-6">
                <div class="grid sm:grid-cols-2 text-center sm:text-start gap-6">
                    <div>
                        <p class="text-gray-500/80 text-sm">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            © Digisa. All rights reserved.
                        </p>
                    </div>
                    <div class="flex justify-center sm:justify-end gap-7">
                        <div>
                            <a href="#">
                                <svg class="w-5 h-5 text-gray-500 hover:text-primary transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =========== footer Section end =========== -->

    <!-- =========== Back To Top Start =========== -->
    <button data-toggle="back-to-top"
        class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="fa-solid fa-arrow-up text-base"></i>
    </button>
    <!-- =========== Back To Top End =========== -->
    <!-- Frost Plugin Js -->
    <script src="{{ asset('front/libs/@frostui/tailwindcss/frostui.js') }}"></script>

    <!-- Swiper Plugin Js -->
    <script src="{{ asset('front/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Animation on Scroll Plugin Js -->
    <script src="{{ asset('front/libs/aos/aos.js') }}"></script>

    <!-- Theme Js -->
    <script src="{{ asset('front/js/theme.min.js') }}"></script>
    <script src="{{ asset('front/libs/flowbite/flowbite.min.js') }}"></script>

</body>

</html>
