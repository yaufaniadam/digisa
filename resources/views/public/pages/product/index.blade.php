<x-user.layout>
    <!-- =========== Hero Section Start =========== -->
    <div class="pt-40 sm:pb-40 pb-60 relative bg-gradient-to-t bg-gray-500">
        <div class="container">
            <div class="text-center lg:w-11/12 mx-auto">
                <div>
                    <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-5">
                        <div>
                            @if (request()->has('category'))
                                <span>
                                    Menampilkan Arsip dengan kategori :
                                    {{ App\Models\Category::find(request()->category)->name }}
                                </span>
                            @endif
                            <br>
                            @if (request()->has('search'))
                                <span>
                                    Menampilkan hasil pencarian dengan kata kunci :
                                    {{ request('search') }}
                                </span>
                            @endif
                        </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="py-0">
        <div class="container">
            <div class="relative sm:-mt-20 mt-0 bg-white py-10 px-0 md:px-10">

                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 lg:pt-0 py-0 " data-aos="fade-up">

                    @foreach ($products as $product)
                        <div class="flex flex-row md:flex-col gap-3 md:gap-3">
                            <a href="{{ $product->group != null
                              ? route('public.group_detail', $product->group_id)
                              : route('public.product_detail', $product->id) }}"
                                class="w-1/5 md:w-full md:h-40 bg-center bg-cover rounded-md" style="background-image:url('{{ route('public.product_thumbnail') . '?path=' . $product->thumbnail }}')"></a>

                            <div class="w-4/5 md:w-full">
                                @foreach (explode(',', $product->category_id) as $category)
                                    <span
                                        class="md:bg-orange-500/10 text-orange-500 font-medium rounded-md  text-xxs md:text-xs md:py-1 md:px-2 mb-0"><a
                                            href="{{ $product->group != null
                                                ? route('public.group_detail', $product->group_id)
                                                : route('public.product_detail', $product->id) }}">
                                            {{ App\Models\Category::find($category)->name }}</a></span>
                                @endforeach

                                <h1 class="text-md md:text-lg md:my-2 transition-all hover:text-primary"><a
                                        href="{{ $product->group != null
                                          ? route('public.group_detail', $product->group_id)
                                          : route('public.product_detail', $product->id) }}">{{ $product->name }}</a></h1>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-0 py-3 sm:px-0">

                  {{ $products->links() }}
                  
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

</x-user.layout>
