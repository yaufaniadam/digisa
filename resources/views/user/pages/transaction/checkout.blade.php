<x-user.layout-login>   
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
</x-user.layout-login>
