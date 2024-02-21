<x-user.layout-login>

    <div class="bg-slate-100  mt-[77px]  py-3 px-3">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Keranjang</h3>
                        <p class="mt-1 font-medium mb-4">Keranjang belanja Anda</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="pb-10">
            <div class="container">

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

                <div class="grid grid-col-1 text-xs font-bold text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <div class="w-full">Judul</div>
                    <div class="w-full">Harga</div>
                    <div class="w-full">Harga</div>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Judul</th>
                                <th scope="col" class="px-6 py-3">Harga</th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart['cartItems'] as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->product->name }}
                                    </th>
                                    <td class="px-6 py-4">Rp. {{ $item->product->price }}</td>

                                    <td class="px-6 py-4 text-right">
                                        <form action="{{ route('user.remove_item_from_cart', $item->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="badge bg-danger">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3 uppercase">Total</th>
                                <th scope="col" class="px-6 py-3">
                                    Rp. {{ $cart['subTotal'] }}
                                </th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </tfoot>
                    </table>


                </div>

                <a href="{{ route('user.proceed_to_payment') }}" class="text-dark nav-link display-6 fs-5 text-center">
                    Lanjutkan ke pembayaran <i class="bi bi-arrow-right"></i>

            </div>


            </a>
        </section>


</x-user.layout-login>
