<x-user.layout>
    <!-- Header-->
    <header class="bg-secondary py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-10 col-xl-10 col-xxl-10">
                    <div class="my-5 text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">
                            Jelajahi 5000+ item arsip kuno dan langka
                        </h1>
                        <h1 class="display-5 fw-bolder text-white mb-2">
                            koleksi Majalah Suara 'Aisyiyah
                        </h1>
                    </div>
                    <form action="{{ route('public.product_collections') }}" method="GET">
                        <div class="input-group mb-3">
                            <button class="btn btn-dark btn-lg" type="button" id="button-addon1">
                                <i class="bi bi-search"></i>
                            </button>
                            <input type="text" name="search" class="form-control" placeholder="Cari arsip ..."
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center flex-column">
                        <h4 class="mb-3">Kategori</h4>

                        <div class="d-flex col-12 justify-content-between">
                            @foreach ($categories as $category)
                                <div class="col mb-5 h-100 d-flex align-items-center flex-column">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                        <i class="bi bi-newspaper"></i>
                                    </div>
                                    <h2 class="h6 text-center">
                                        <a
                                            href="{{ route('public.product_collections') . '?category=' . $category->id }}">
                                            {{ $category->name }}
                                        </a>
                                    </h2>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class=" gx-5">
                <div class="col-lg-12 mb-5">
                    <h4 class="mb-3 text-center">Koleksi Terbaru</h4>
                </div>
                <div class="col-lg-12">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        @foreach ($products as $product)
                            <div class="card m-3" style="width: 18rem;">
                                <img src="https://dummyimage.com/600x400/343a40/6c757d" class="card-img-top py-3"
                                    alt="...">
                                <div class="card-body">
                                    <a class="card-text"
                                        href="{{ route('public.product_detail', $product->id) }}">{{ $product->name }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog preview section-->
</x-user.layout>
