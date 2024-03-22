<x-user.layout-nologin>

    <div class="min-h-screen flex items-center justify-center">
        <div class="container">
            <div>
                <div class="bg-white shadow rounded mb-6">
                    <div class="grid md:grid-cols-12">
                        <div class="bg-white shadow-md p-12 rounded-s xl:col-span-5 md:col-span-6">
                            <div class="mb-12">
                                <a href="index.html">
                                    <img src="{{ asset('front/images/logo-dark.png') }}" alt="logo-img" class="h-16">
                                </a>
                            </div>
                            <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Selamat datang kembali!
                            </h6>
                            <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">Silakan login terlebih dahulu.</p>

                            @if (session('error'))                               

                                <div id="alert-border-4"
                                    class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-300 dark:bg-gray-800 dark:border-red-800"
                                    role="alert">
                                    <i class="fas fa-exclamation-triangle me-3"></i> {{ session('error') }}

                                </div>
                            @endif

                            @if (session('status'))
                              
                                <div id="alert-border-4"
                                    class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800"
                                    role="alert">
                                    <i class="fas fa-exclamation-triangle me-3"></i> {{ session('status') }}

                                </div>
                            @endif


                            <form action="{{ route('public.attempt_login') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium mb-1 text-gray-600">Email
                                        <small>*</small></label>
                                    <input type="email" id="email" name="email"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('email') border-red-500 @enderror"
                                        placeholder="Email Anda" value="{{ old('email') }}">

                                    @error('email')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <a href="{{ route('public.forgot_password') }}"
                                        class="float-right text-gray-500 text-xs border-b border-dashed pb-1 ms-1">Lupa
                                        sandi?</a>
                                    <label for="password" class="block text-sm font-medium mb-1 text-gray-600">Sandi
                                        <small>*</small></label>
                                    <input type="password" id="password" name="password"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('password') border-red-500 @enderror"
                                        placeholder="Sandi">

                                    @error('password')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-0 text-center">
                                    <button
                                        class="w-full bg-green-500 text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30"
                                        type="submit">Log In</button>
                                </div>
                            </form>

                        </div>
                        <div class="hidden md:block xl:col-span-7 md:col-span-6">
                            <div class="max-w-[80%] mx-auto">
                                <div class="my-12 py-12">
                                    <div class="flex items-center justify-center h-full">
                                        <div class="swiper" id="swiper_one">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="swiper-slide-content">
                                                        <div class="text-center w-3/5 mx-auto">
                                                            <img src="{{ asset('front/images/saas1.jpg') }}"
                                                                class="w-full" />
                                                        </div>
                                                        <div class="text-center my-6 pb-12">
                                                            <h5
                                                                class="font-medium text-base/[1.6] text-gray-600 my-2.5">
                                                                Digital Asset Suara 'Aisyiyah ease</h5>
                                                            <p class="text-sm/[1.6] text-gray-500 mb-4">Ribuan koleksi
                                                                lawas Suara 'Aisyiyah
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- swiper-wrapper End -->
                                            <div class="swiper-pagination !bottom-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                    <p class="text-gray-500 leading-6 text-base">Belum memili akun? <a href="{{ route('public.register') }}"
                            class="text-success font-semibold ms-1">Daftar sekarang.</a></p>
                </div>
            </div>
        </div>
    </div>

</x-user.layout-nologin>
