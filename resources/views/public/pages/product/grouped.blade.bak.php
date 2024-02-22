<x-user.layout>

    <section class="pt-40 pb-20">
        <div class="container">

            <div id="alert-border-4" class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                  A simple danger alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-4" aria-label="Close">
                  <span class="sr-only">Dismiss</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                </button>
            </div>
           

            @if (session()->has('warning'))
                <div class="alert alert-warning justify-content-between d-flex" role="alert">
                    <span>
                        {{ session()->get('warning') }}
                    </span>
                    <a href="{{ route('user.cart') }}" class="alert-link">
                        Cek Keranjang <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            @endif

            <div class="lg:w-4/5">
                <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                        href="#">Majalah</a></span>
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3">{{ $product->group->name }}</h1>
            </div>

            <div class="mb-8">
                <div class="flex flex-wrap items-center justify-between gap-6">

                    <div class="flex items-center gap-3 mt-7">
                        <div>
                            <p class="text-sm text-gray-500">11 Mar, 2020</p>
                        </div>                       
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-6">
                <div>
                    <img class="rounded-3 my-6"
                        src="{{ route('public.product_thumbnail') . '?path=' . $product->group->thumbnail }}"
                        alt="{{ $product->group->description }}" />
                    
                </div>
                <div>
                    <h2 class="text-xl mb-3">Daftar Isi</h2>
                    <div class="text-sm/relaxed tracking-wider text-gray-600 mb-5">{{ $product->group->description }}
                    </div>
                    <div class="border-gray-200 rounded-lg bg-gray-100">
                        @foreach ($product->group->products as $item)
                            <div
                                class="w-full px-4 border-b  dark:border-gray-600 flex flex-row justify-between align-middle p-3">
                                <p class="">{{ $item->name }}</p>
                                <a href="{{ route('public.product_detail', $item->id) }}"
                                    class="px-2 py-1 text-xs font-medium text-center text-white bg-green-400 rounded-lg hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-200  leading-1">Lihat</a>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>


        </div>
    </section>


</x-user.layout>
