<x-user.layout>

    <section class="pt-40 pb-20">
        <div class="container">

            @if (session()->has('warning'))
                <div id="alert-border-4"
                    class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        {{ session()->get('warning') }} <a href="{{ route('user.cart') }}"
                            class="font-semibold underline hover:no-underline"> Cek Keranjang</a>.
                    </div>
                    {{-- <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-4" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button> --}}
                </div>

                <div class="alert alert-warning justify-content-between d-flex" role="alert">
                    <span>

                    </span>
                    <a href="" class="alert-link">
                        Cek Keranjang <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            @endif

            <div class="lg:w-4/5">
                <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                        href="#">Majalah</a></span>
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3">{{ $product->name }}</h1>
            </div>

            <div class="mb-8">
                <div class="flex flex-wrap items-center justify-between gap-6">

                    <div class="flex items-center gap-3 mt-7">
                        <div>
                            {{-- <p class="text-sm text-gray-500">{{ $product->created_at->isoFormat('d MMMM Y') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-6">
                <div>
                    <img class="rounded-3 mb-6"
                        src="{{ route('public.product_thumbnail') . '?path=' . $product->thumbnail }}"
                        alt="{{ $product->name }}" />

                </div>
                <div>

                    <div class="text-sm/relaxed tracking-wider text-gray-600 mb-5">{{ $product->description }}
                    </div>
                    <div class="text-sm md:text-lg font-bold tracking-wider text-gray-600 mb-5"> Rp. {{ $product->price }}
                    </div>
                    <div class="">
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a href="{{ route('user.add_product_to_cart', $product->id) }}"
                                class="w-full bg-green-500 text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30">
                                <i class="fas fa-cart-shopping"></i>
                                Tambahkan ke keranjang
                            </a>

                            
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>


</x-user.layout>
