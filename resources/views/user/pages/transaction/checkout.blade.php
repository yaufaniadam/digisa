<x-user.layout>
    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3 pb-6">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Checkout</h3>
                        <p class="mt-1 font-medium mb-4">Konfirmasi pembelajaan.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row mt-2 gap-6">
                    <div class="w-full md:w-3/4">
                        <div class="flex flex-col gap-3">

                            {{-- <div class="px-4 py-3 flex bg-white gap-6 first:rounded-t-xl last:rounded-b-xl">
                                <div class="w-1/2 text-xs md:text-base">
                                    No Tagihan : <span class="text-lg md:text-2xl"> INV12345</span>
                                </div>
                                
                                <div class="w-1/2 flex items-center justify-end">
                                    <div class="flex flex-col md:flex-row gap-2 md:gap-4">                                        
                                      
                                    </div>                                   
                                </div>  

                            </div> --}}

                            @foreach ($order['cartItems'] as $item)

                            <div class="px-4 py-3 flex bg-white gap-6 first:rounded-t-xl last:rounded-b-xl">
                                <div class="w-1/5">
                                    <div class="w-full h-2/3 md:h-28 bg-center rounded-md hover:opacity-90 "
                                    style="background-image:url('{{ route('public.product_thumbnail') . '?path=' . $item->product->thumbnail }}'); background-size: cover; background-repeat: no-repeat">
                                    </div>
                                </div>
                                <div class="w-4/5 text-sm md:text-base">
                                    <div class="flex flex-col gap-1">
                                        <p>{{ $item->product->name }}</p>
                                        <p class="font-bold">Rp {{ $item->product->price }}</p>

                                    </div>

                                </div>
                            </div>

                            @endforeach
                            


                        </div>
                    </div>

                    <div class="w-full md:w-1/3">
                        <div class="bg-white p-6 rounded-xl flex flex-col gap-3">
                            <p class="font-bold text-base">Ringkasan</p>
                            <div class="flex justify-between mb-3">
                                <p>Total Harga ({{ $order['cartItems']->count() }} item)</p>
                                <p class="font-bold">Rp. {{ $order['total'] }}</p>
                            </div>
                           
                            <form action="{{ route('user.place_order') }}" method="POST">
                                @csrf
                                {{-- <h6 class="mb-2 fw-normal">
                                    Metode Pembayaran :
                                </h6>--}}
                                <input class="form-control mb-2" type="text" name="payment_method" value="Bank Transfer"
                                    readonly> 
                               
                                    <button
                                    class="w-full bg-success text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30"
                                    type="submit">Lanjut Pembayaran</button>
                                
                            </form>



                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- <section class="py-5" id="features">

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
                        @foreach ($order['cartItems'] as $item)
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-6">
                                        <p class="mb-0">
                                            {{ $item->product->name }}
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">
                                            Rp. {{ $item->product->price }}
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
    </section> --}}
</x-user.layout>
