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
                            <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Buat akun.</h6>
                            <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">Buat akun untuk melakukan transaksi.</p>

                            @if (session()->has('success'))
                               
                                <div id="alert-border-4"
                                    class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-300 dark:bg-gray-800 dark:border-red-800"
                                    role="alert">
                                    <i class="fas fa-exclamation-triangle me-3"></i>  {{ session()->get('success') }}

                                </div>
                            @endif                     
                       
                            <form action="{{ route('public.register_new_account') }}" method="POST">
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
                                    <label for="name" class="block text-sm font-medium mb-1 text-gray-600">Nama
                                        <small>*</small></label>
                                    <input type="text" id="name" name="name"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('name') border-red-500 @enderror"
                                        placeholder="Nama Anda" value="{{ old('name') }}">

                                    @error('name')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="phone" class="block text-sm font-medium mb-1 text-gray-600">Nomor Telepon
                                        <small>*</small><br><small class="text-gray-400">Contoh : 628561234567, tidak perlu gunakan +, dan tidak perlu gunakan pemisah (- atau spasi)</small></label>
                                    <input type="text" id="phone" name="phone"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('phone') border-red-500 @enderror"
                                        placeholder="Telepon Anda" value="{{ old('phone') }}">

                                    @error('phone')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="organization_name" class="block text-sm font-medium mb-1 text-gray-600">Nama Instansi
                                        <small>*</small></label>
                                    <input type="text" id="organization_name" name="organization_name"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('organization_name') border-red-500 @enderror"
                                        placeholder="Nama Instansi" value="{{ old('organization_name') }}">

                                    @error('organization_name')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="purposes" class="block text-sm font-medium mb-1 text-gray-600">Keperluan Mendaftar
                                        <small>*</small></label>
                                    <input type="text" id="purposes" name="purposes"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('purposes') border-red-500 @enderror"
                                        placeholder="Keperluan Mendaftar" value="{{ old('purposes') }}">

                                    @error('purposes')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium mb-1 text-gray-600">Kata Sandi
                                        <small>*</small><br><small class="text-gray-400">Gunakan kombinasi huruf dan angka, dan mengandung setidaknya 1 huruf besar atau huruf kecil. Hindari kata 'password' atau 'pass'</small></label>
                                    <input type="password" id="password" name="password"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('password') border-red-500 @enderror"
                                        placeholder="Kata sandi" value="{{ old('password') }}">

                                    @error('password')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password_confirmation" class="block text-sm font-medium mb-1 text-gray-600">Ulangi Kata Sandi
                                        <small>*</small></label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0 @error('password_confirmation') border-red-500 @enderror"
                                        placeholder="Kata sandi" value="{{ old('password_confirmation') }}">

                                    @error('password_confirmation')
                                        <div class="error text-red-600 text-xs py-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                               

                                <div class="mb-0 text-center">
                                    <button
                                        class="w-full bg-green-500 text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30"
                                        type="submit">Daftar</button>
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
                    <p class="text-gray-500 leading-6 text-base">Sudah memili akun? <a href="{{ route('public.login') }}"
                            class="text-success font-semibold ms-1">Masuk.</a></p>
                </div>
            </div>
        </div>
    </div>

    
</x-user.layout-nologin>
