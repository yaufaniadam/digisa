<x-user.layout>
    <!-- =========== Hero Section Start =========== -->
    <div class="pt-36 sm:pb-96 pb-20 relative bg-gradient-to-t bg-gray-500">
        <div class="container">
            <div class="text-center lg:w-11/12 mx-auto">
                <div>
                    <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-5">
                        Jelajahi
                        <span
                            class="relative z-0 after:bg-warning after:-z-10 after:absolute md:after:h-6 after:h-4 after:w-full after:bottom-0 after:end-0">5000+</span>
                        item arsip kuno dan langka koleksi Majalah Suara 'Aisyiyah
                    </h1>

                    {{-- <div class="flex flex-wrap items-center justify-center gap-2 mt-12">
                        <div class="flex items-center">
                            <input type="text" id="search-input" name="search-input" placeholder="Masukkan kata kunci"
                                class="w-full rounded border-gray-300 focus:border-gray-400 focus:ring-0 bg-white py-2 px-4" />
                        </div>

                        <a href="#"
                            class="py-2 px-4 rounded text-white bg-green-500 hover:shadow-lg hover:shadow-primary/50 focus:outline focus:outline-primary/50">Cari</a>
                    </div> --}}

                    <form class="w-full mt-12" action="{{ route('public.product_collections') }}" method="GET">
                        <div class="relative flex justify-between items-center border bg-white rounded-md">
                            <input
                                class="w-full text-sm text-gray-700 border-0 rounded py-3 px-4 leading-tight focus:ring-0 focus:outline-none"
                                id="grid-first-name" type="text" placeholder="Masukkan kata + tekan enter ..."
                                name="search">
                            <svg class="w-5 h-5 me-6" fill="none" aria-hidden="true">
                                <path d="m19 19-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                            </svg>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="py-0">
        <div class="container">
            <div class="relative sm:-mt-80 mt-0 bg-white py-10 px-0 md:px-10">
                <div class="text-center">
                    <h1 class="text-xl md:text-3xl font-medium">Kategori</h1>
                </div>
                <div class="grid xl:grid-cols-4 md:grid-cols-4 grid-cols-4 pt-2 md:pt-12 gap-2 md:gap-4">
                    @foreach ($categories as $category)
                        <a href="{{ route('public.product_collections') . '?category=' . $category->id }}"
                            class="p-1 hover:bg-white rounded-md hover:shadow-xl transition-all duration-500 flex flex-col items-center"
                            data-aos="fade-up" data-aos-duration="500">
                            <div class="w-12 h-12 rounded-md flex items-center justify-center">
                                <img src="{{ asset('front/images/ikon/majalah.svg') }}" class="h-10" />
                            </div>
                            <h4 class="text-center text-xs lg:text-base font-medium mt-4 md:my-4">{{ $category->name }}
                            </h4>
                        </a>
                    @endforeach


                </div>

                <div class="text-center mt-10">
                    <h1 class="text-xl md:text-3xl font-medium">Koleksi Terbaru</h1>
                </div>

                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 lg:pt-16 py-5 " data-aos="fade-up">

                    @foreach ($products as $product)
                        <div class="flex flex-row md:flex-col gap-3 md:gap-3">
                            <a href="{{ route('public.product_detail', $product->id) }}"
                                class="w-1/5 md:w-full md:h-40 bg-center bg-cover rounded-md hover:opacity-10"
                                style="background-image:url('{{ route('public.product_thumbnail') . '?path=' . $product->thumbnail }}')"></a>

                            <div class="w-4/5 md:w-full">


                                @foreach (explode(',', $product->category_id) as $category)
                                    <span
                                        class="md:bg-orange-500/10 text-orange-500 font-medium rounded-md  text-xxs md:text-xs md:py-1 md:px-2 mb-0">{{ App\Models\Category::find($category)->name }}</span>
                                @endforeach


                                <h1 class="text-md md:text-lg md:my-2 transition-all hover:text-gray-500"><a
                                        href="{{ route('public.product_detail', $product->id) }}">{{ $product->name }}</a>
                                </h1>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-0 py-3 sm:px-0">
                    <div class="flex flex-1 justify-between sm:hidden">
                        <a href="#"
                            class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                        <a href="#"
                            class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">97</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                <a href="#"
                                    class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                <a href="#" aria-current="page"
                                    class="relative z-10 inline-flex items-center bg-green-400 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-400">1</a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                <a href="#"
                                    class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                <span
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                <a href="#"
                                    class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                                <a href="#"
                                    class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- =========== services Section End =========== -->

</x-user.layout>
