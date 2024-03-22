<x-user.layout-login>


    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-xl text-gray-800 mt-2">Keranjang</h3>
                    <p class="mt-1 font-medium mb-4">Keranjang belanja</p>
                </div>
            </div>

            @if (session()->has('success'))
                <div class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert">
                    <i class="fas fa-check-circle"></i>
                    <div class="ms-3 text-sm font-medium">
                        {{ session()->get('success') }}
                        <a href="{{ route('public.product_collections') }}"
                            class="font-semibold underline hover:no-underline">Lanjut Belanja.</a>
                    </div>
                </div>
            @endif

            @if (session()->has('warning'))
                <div class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-400 dark:bg-gray-800 dark:border-yellow-800"
                    role="alert">
                    <i class="fas fa-check-circle"></i>
                    <div class="ms-3 text-sm font-medium">
                        {{ session()->get('warning') }}
                        <a href="{{ route('public.product_collections') }}"
                            class="font-semibold underline hover:no-underline">Lanjut Belanja.</a>
                    </div>
                </div>
            @endif

            @if ($cart['cartItems'] == null)
                
                <div class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-400 dark:bg-gray-800 dark:border-yellow-800"
                role="alert">
                <i class="fas fa-check-circle"></i>
                <div class="ms-3 text-sm font-medium">
                    Keranjang belanja kosong.
                    <a href="{{ route('public.product_collections') }}"
                        class="font-semibold underline hover:no-underline"> Lanjut Belanja.</a>
                </div>
            </div>

            @else
                <div class="flex flex-col md:flex-row mt-2 gap-6">
                    <div class="w-full md:w-3/4">
                        <div class="flex flex-col gap-3">


                            @foreach ($cart['cartItems'] as $item)
                                <div class="px-4 py-3 flex bg-white gap-6 first:rounded-t-xl last:rounded-b-xl">
                                    <div class="w-1/5">
                                        <div class="w-full h-2/3 md:h-28 bg-center rounded-md hover:opacity-90 "
                                            style="background-image:url('{{ route('public.product_thumbnail') . '?path=' . $item->product->thumbnail }}'); background-size: cover; background-repeat: no-repeat">
                                        </div>
                                    </div>
                                    <div class="w-4/5 text-xs md:text-base">
                                        <div class="flex flex-col gap-1">
                                            <p>{{ $item->product->name }}</p>
                                            <p class="font-bold">Rp {{ $item->product->price }}</p>
                                            <a href="" class="text-gray-400 hover:text-red-400"
                                                title="Hapus item">

                                                <form action="{{ route('user.remove_item_from_cart', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="badge bg-danger">
                                                        <i class="fas fa-trash-alt mt-2"></i>
                                                    </button>
                                                </form>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="w-full md:w-1/4">
                        <div class="bg-white p-6 rounded-xl flex flex-col gap-3">
                            <p class="font-bold text-base">Ringkasan</p>
                            <div class="flex justify-between">
                                <p>Total</p>
                                <p class="font-bold">Rp {{ $cart['subTotal'] }}</p>
                            </div>
                            <a href="{{ route('user.proceed_to_payment') }}"
                                class="w-full bg-success text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30"
                                type="submit">Beli</a>
                        </div>
                    </div>
                </div>

            @endif

        </div>
    </section>



</x-user.layout-login>
