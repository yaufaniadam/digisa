<x-user.layout>
  <section class="py-5" id="features">
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
  </section>
</x-user.layout>