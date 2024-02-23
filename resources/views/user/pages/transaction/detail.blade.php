<x-user.layout-login>

  
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Transaksi</h3>
                        <p class="mt-1 font-medium mb-4">Detail Transaksi Saya.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row mt-2 gap-6">
                    <div class="w-full md:w-3/4">
                        <div class="flex flex-col gap-3">

                            <div class="px-4 py-3 flex bg-white gap-6 first:rounded-t-xl last:rounded-b-xl">
                                <div class="w-1/3 text-xs md:text-base items-center">
                                    No Tagihan : <span class="text-xl md:text-2xl"> INV-{{ $transaction->id }}</span>                                    
                                </div>
                                
                                <div class="w-2/3 flex items-center justify-end">
                                    <div class="flex flex-col md:flex-row gap-2 md:gap-1 items-end md:items-center ">                                        
                                       <p class="text-gray-400 text-right text-xs md:text-xl">{{ $transaction->created_at->isoFormat('dddd, d MMMM Y, HH:mm:ss') }}</p>
                                       @if ($transaction->status ==='pending')
                                       <p class="text-right"><span class="bg-red-50 text-red-800 text-xs font-medium px-2.5 py-1 rounded dark:bg-red-50 dark:text-red-300 uppercase">{{ $transaction->status }}</span></p>
                                       @else
                                       <p class="text-right" ><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded dark:bg-green-900 dark:text-green-300 uppercase">{{ $transaction->status }}</span></p>
                                       @endif
                                    </div>                                   
                                </div>  

                            </div>

                            @foreach ($transaction->transactionItems as $item)

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
                                <p>Total Harga ({{ $transaction->transactionItems->count() }} item)</p>
                                <p class="font-bold">Rp. {{ $transaction->payment_amount }}</p>
                            </div>

                            @if ($transaction->status ==='pending')
                            <hr>
                            <p class="font-bold text-base mt-3">Lakukan Pembayaran</p>
                            <p>No rekening: </p>
                            <h3 class="text-xl mb-0 leading-3">15570 14473</h3>
                            <p class="mb-3 text-xs">(BSI an Suara'Aisyiyah)</p>                          

                            <div data-fc-type="accordion" class="">                              
                                <div class="border border-gray-300 rounded-lg mt-0">
                                    <button
                                        class="p-3 inline-flex items-center justify-between w-full font-semibold text-left transition"
                                        data-fc-type="collapse">
                                        Lihat Panduan Bayar
                                        <span
                                            class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </button>
                                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">

                                        <ol class="list-decimal ms-4 text-gray-400 dark:text-gray-300 pt-3 p-3">
                                            <li>Transfer sejumlah nominal yang tertera ke nomor<strong> BSI 15570
                                                    14473</strong> </li>
                                            <li>Isikan berita transfer : <strong>INV{{ $transaction->id }}</strong>. </li>
                                            <li>Lalu klik tombol <strong>"Konfirmasi melalui WA"</strong> setelah
                                                melakukan transfer.</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                           <a href="https://api.whatsapp.com/send?phone=62817270787&text=Salam saya ingin konfirmasi pembayaran Digisa"
                                class="w-full bg-success text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30"
                                type="submit">Konfirmasi melalui WA</a>
                            @endif   
                        </div>
                    </div>
                </div>
            </div>
        </section>
 

   
</x-user.layout-login>
