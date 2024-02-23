<x-user.layout>
    <!-- =========== Hero Section Start =========== -->
    <div class="pt-40 sm:pb-40 pb-60 relative bg-gradient-to-t from-slate-500/10">
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
                            
                            @elseif (request()->has('search'))
                                <span>
                                    Menampilkan hasil pencarian dengan kata kunci :
                                    {{ request('search') }}
                                </span>
                            @endif

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
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="py-0">
        <div class="container">
            <div class="relative sm:-mt-20 mt-0 bg-white py-10 px-0 md:px-10">

                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 lg:pt-0 py-0 " >

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

                <div class="mt-10">                
                    {{ $products->links('pagination::tailwind')  }}
                </div>
              
            </div>
        </div>
    </section>

</x-user.layout>
