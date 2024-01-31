<x-user.layout>
    <section class="py-5" id="features">

        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-12 col-xl-12 col-xxl-12">
                    <div class="my-5 text-xl-start">
                        <h1 class="display-6 mb-2 fw-bolder">
                            Checkout
                        </h1>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gx-5">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="col-6">
                                    <p class="mb-0">
                                        Barang
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0">
                                        Harga
                                    </p>
                                </div>
                            </div>
                        </div>
                        @foreach($order['cartItems'] as $item)
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-6">
                                        <p class="mb-0">
                                            {{ $item->product->name }}
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">
                                            {{ $item->product->price }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gx-5">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="d-flex p-3 pb-0">
                        <div class="col-6">
                            <h6 class="mb-2 fw-light">
                                Subtotal
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-2 fw-normal">
                                Rp. {{ $order['subTotal'] }}
                            </h6>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex p-3 pb-0">
                        <div class="col-6">
                            <h6 class="mb-2 fw-light">
                                Total
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-2 fw-normal">
                                Rp. {{ $order['total'] }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gx-5 mt-5">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <form action="{{ route('user.place_order') }}" method="POST">
                        @csrf
                        <h6 class="mb-2 fw-normal">
                            Metode Pembayaran :
                        </h6>
                        <input class="form-control mb-2" type="text" name="payment_method" value="Bank Transfer"
                            readonly>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">
                                Konfirmasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
