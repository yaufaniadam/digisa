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
                    <img class="rounded-3 mb-6"
                        src="{{ route('public.product_thumbnail') . '?path=' . $product->group->thumbnail }}"
                        alt="{{ $product->group->name }}" />

                </div>
                <div>

                    <div class="text-sm/relaxed tracking-wider text-gray-600 mb-5">{{ $product->group->description }}
                    </div>
                    <div>
                        <h2 class="text-xl mb-3">Daftar Isi</h2>
                        <div class="border-gray-200 rounded-lg bg-gray-100">
                            @foreach ($product->group->products as $item)
                                <div
                                    class="w-full px-4 border-b dark:border-gray-600 flex flex-row justify-between align-middle p-3">
                                    <p class="">{{ $item->name }}</p>
                                    <a href="{{ route('public.product_detail', $item->id) }}"
                                        class="px-2 py-1 text-xs font-medium text-center text-white bg-green-400 rounded-lg hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-200 leading-1">Lihat</a>
                                </div>
                            @endforeach    
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
    {{-- <section class="py-5" id="features">
      <div class="container px-5 my-5">
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
          <div class="row gx-5">
              <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                      src="{{ route('public.product_thumbnail') . '?path=' . $product->group->thumbnail }}"
                      alt="..." />
              </div>
              <div class="col-lg-8 col-xl-7 col-xxl-6">
                  <div class="my-5 text-xl-start">
                      <h1 class="display-6 mb-2 f">
                          {{ $product->group->name }}
                      </h1>
                      <p class="lead fw-normal mb-4">
                          {{ $product->group->description }}
                      </p>
                      <h5>Isi :</h5>
                      @foreach ($product->group->products as $item)
                          <div class="card card-body mb-3">
                              <h5 class=" mb-2">
                                  <a href="{{ route('public.product_detail', $item->id) }}">
                                      {{ $item->name }}
                                  </a>
                              </h5>
                              <p class="lead fw-normal mb-4">
                                  Rp. {{ $item->price }}
                              </p>
                              <div class="d-grid gap-3 d-flex justify-content-end justify-content-xl-start">
                                  <a href="{{ route('user.add_product_to_cart', $item->id) }}"
                                      class="btn btn-primary btn-lg px-4 me-sm-3" target="_blank">
                                      <i class="bi bi-cart-plus"></i>
                                      Tambahkan ke keranjang
                                  </a>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
</x-user.layout>
