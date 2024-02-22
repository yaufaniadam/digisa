<x-user.layout-login>

    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3 pb-6">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Transaksi</h3>
                        <p class="mt-1 font-medium mb-4">Semua proses transaksi.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row mt-2 gap-6">
                    <div class="w-full ">
                        <div class="flex flex-col gap-3">

                            @if ($transactions->count() > 0)
                            
                                @foreach ($transactions as $transaction)
                                    <a href="{{ route('user.transaction_detail', $transaction->id) }}">

                                        <div
                                            class="px-4 py-3 flex bg-white gap-6 first:rounded-t-xl last:rounded-b-xl hover:bg-slate-50">
                                            <div class="w-1/2 flex flex-col md:flex-row gap-1 md:gap-3 items-center">
                                                <p>INV-{{ $transaction->id }}</p>
                                                <p class="text-gray-400 text-xs md:text-xl">{{ $transaction->created_at->isoFormat('dddd, d MMMM Y, HH:mm:ss') }}</p>
                                            </div>
                                            <div class="w-1/2 flex items-center justify-end">
                                                <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                                    <p class="font-bold text-gray-900">Rp. {{ $transaction->payment_amount }}</p>
                                                    @if ($transaction->status === 'pending')
                                                        <p class="text-right"><span
                                                                class="bg-red-50 text-red-800 text-xs font-medium px-2.5 py-1 rounded dark:bg-red-50 dark:text-red-300 uppercase">{{ $transaction->status }}</span>
                                                        </p>
                                                    @else
                                                        <p class="text-right"><span
                                                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded dark:bg-green-900 dark:text-green-300 uppercase">{{ $transaction->status }}</span>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                belum ada transaksi
                            @endif





                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

</x-user.layout-login>
