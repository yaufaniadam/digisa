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
    <header
        class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full bg-white transition-all py-3.5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="{{ route('public.home') }}">
                    <img src="{{ asset('front/images/logo-dark.png') }}" class="h-12 logo-dark" alt="Logo Dark" />
                    <img src="{{ asset('front/images/logo-light.png') }}" class="h-12 logo-light" alt="Logo Light" />
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block mx-auto grow">
                    <ul id="navbar-navlist"
                        class="grow flex flex-col lg:flex-row lg:items-center lg:justify-center mt-4 lg:mt-0">
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-success"
                                href="{{ route('user.dashboard') }}">                                
                                Dasbor
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-success transition-all"
                                href="{{ route('user.cart') }}">
                               Keranjang
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-success transition-all"
                                href="{{ route('user.transactions') }}">
                               Transaksi
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-success transition-all"
                            href="{{ route('user.paid_transaction_files') }}"">                               
                                Unduh
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="block grow ms-auto lg:shrink me-4 lg:me-0">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-end">
                        <!-- Home Page Dropdown -->
                        <li class="nav-item">
                            {{-- <a href="javascript:void(0);"
                                class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                                data-fc-type="dropdown" data-fc-target="landingDropdownMenu"
                                data-fc-placement="bottom">
                                <span class="h-full hover:text-primary">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>Stockholm-icons / General / Notification#2</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Stockholm-icons-/-General-/-Notification#2" stroke="none"
                                            stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                id="Combined-Shape" fill="currentColor"></path>
                                            <circle id="Oval" fill="currentColor" opacity="0.3" cx="18.5"
                                                cy="5.5" r="2.5"></circle>
                                        </g>
                                    </svg>
                                </span>
                            </a> --}}

                            <div id="landingDropdownMenu"
                                class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-auto fc-dropdown-open:flex flex-col gap-1.5">


                                {{-- <div class="nav-item">
                                    <a class="nav-link p-3 hover:bg-slate-100" href="#">
                                        <div class="flex items-center -ms-1.5">
                                            <span
                                                class="bg-green-400/10 text-green-400 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                            <div class="flex-grow-1">
                                                <p class="text-xs/none">A new comment on your post</p>
                                                <span class="text-gray-400 text-xs"><small>3 min ago</small></span>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}

                                {{-- <div class="w-full bg-slate-100 inline-flex items-center justify-center text-sm text-gray-800 py-1.5 px-3">View All</div> --}}
                            </div>
                        </li>

                        <!-- Inner Page Dropdown -->
                        <li class="nav-item">
                            <a href="javascript:void(0);"
                                class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                                data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                                data-fc-placement="bottom">
                                <div class="flex items-center">
                                    <div class="shrink">
                                        <div class="h-8 w-8 me-2">
                                            <img src="{{ asset('front/images/avatar.jpg') }}"
                                                class="avatar h-full w-full rounded-full me-2" alt="">
                                        </div>
                                    </div>
                                    <div class="hidden lg:block grow ms-1 leading-normal">
                                        <span class="block text-sm font-medium">{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </a>

                            <div id="innerPageDropdownMenu"
                                class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">
                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="{{ route('user.profile') }}">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user icon icon-xxs me-1 icon-dual">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        Profil
                                    </a>
                                </div>


                                <hr class="-mx-2 my-2">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="{{ route('user.logout') }}">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-unlock icon icon-xxs me-1 icon-dual">
                                            <rect x="3" y="11" width="18" height="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                        </svg>
                                        Log Out
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

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
        class="fc-offcanvas-open:-translate-x-0 -translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-e hidden">
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
                    <li class="nav-item pe-4">
                        <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-success"
                            href="{{ route('user.dashboard') }}">                                
                            Dasbor
                        </a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-success transition-all"
                            href="{{ route('user.cart') }}">
                           Keranjang
                        </a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-success transition-all"
                            href="{{ route('user.transactions') }}">
                           Transaksi
                        </a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-success transition-all"
                        href="{{ route('user.paid_transaction_files') }}"">                               
                            Unduh
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
            <a href="{{ route('user.logout') }}"
                class="bg-green-500 hover:bg-green-400 w-full text-white p-3 rounded flex items-center justify-center text-sm">Logout</a>
        </div>
            
        </div>
    </div>
    <!-- =========== Mobile Menu End =========== -->

    <div class="bg-slate-50  mt-[77px]  py-6 md:py-12 px-3 min-h-[75vh]">

    {{ $slot }}

    </div>


    <!-- =========== footer Section start =========== -->
    <footer class="bg-gray-100">
        <div class="container">
            {{-- <div class="grid xl:grid-cols-5 gap-6 py-12">
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
                                    <i class="fas fa-map-marker-alt"></i> Jl. Kauman Gm I/17A Yogyakarta 55122
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
            </div> --}}
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
