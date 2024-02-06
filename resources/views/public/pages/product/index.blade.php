<x-user.layout>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-12 col-xl-12 col-xxl-12">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div>
                            @if (request()->has('category'))
                                <span>
                                    Menampilkan Arsip dengan kategori :
                                    {{ App\Models\Category::find(request()->category)->name }}
                                </span>
                            @endif
                        </div>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach ($categories as $category)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('public.product_collections') . '?category=' . $category->id }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-content-start">
                        @foreach ($products as $product)
                            <div class="card my-2 mx-2" style="width: 18rem;">
                                <img src="{{ route('public.product_thumbnail') . '?path=' . $product->thumbnail }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <a href="{{ route('public.product_detail', $product->id) }}">
                                            {{ $product->name }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->

</x-user.layout>
