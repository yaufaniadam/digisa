<x-user.layout-login>

    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3 pb-6">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Checkout</h3>
                        <p class="mt-1 font-medium mb-4">Silakan lakukan pembayaran.</p>
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
                                <p>Total Harga (1 Item)</p>
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
    </div>

    {{-- <section class="py-5" id="features">

        <div class="container px-5 my-5">
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
                        @foreach ($transaction->transactionItems as $item)
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
                                Total Pembayaran
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-2 fw-normal">
                                Rp. {{ $transaction->payment_amount }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gx-5 mt-5">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="col-12">
                                    <p class="mb-0">
                                        Pembayaran
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex pb-0">
                                <div class="col-6">
                                    <h6 class="mb-2 fw-light">
                                        Metode Pembayaran
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-2 fw-normal">
                                        {{ $transaction->payment_method }}
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex pb-0">
                                <div class="col-6">
                                    <h6 class="mb-2 fw-light">
                                        Rekening Pembayaran
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-2 fw-normal">
                                        082342445456
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex pb-0">
                                <div class="col-6">
                                    <h6 class="mb-2 fw-light">
                                        ID Transaksi
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-2 fw-normal">
                                        {{ $transaction->id }}
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex pb-0">
                                <div class="col-6">
                                    <h6 class="mb-2 fw-light">
                                        Tanggal Transaksi
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-2 fw-normal">
                                        {{ $transaction->created_at->isoFormat('dddd, d MMMM Y, HH:mm:ss a') }}
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex pb-0">
                                <div class="col-6">
                                    <h6 class="mb-2 fw-light">
                                        Status Pembayaran
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-2 fw-normal">
                                        {{ $transaction->status }}
                                    </h6>
                                </div>
                            </div>
                            @if ($transaction->status == 'lunas')
                                <div class="d-flex pb-0">
                                    <div class="col-6">
                                        <h6 class="mb-2 fw-light">
                                            Tanggal Konfirmasi Pembayaran
                                        </h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-2 fw-normal">
                                            {{ $transaction->updated_at }}
                                        </h6>
                                    </div>
                                </div>
                            @endif
                            @if ($transaction->status == 'pending')
                                <div class="d-flex pb-0">
                                    <div class="col-6">
                                        <h6 class="mb-2 fw-light">
                                            Kirim bukti pembayaran ke
                                        </h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-2 fw-normal">
                                            0894-xxx-xxx
                                        </h6>
                                    </div>
                                </div>
                            @endif
                            <div class="d-flex pb-0 mt-3">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-2 fw-light">
                                        File Arsip
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Download File
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Download Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                        <div>
                            @foreach ($transaction->transactionItems as $item)
                                <a href="{{ route('user.download_file', $item->id) }}" class="btn btn-primary btn-sm">
                                    Download {{ $item->product->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</x-user.layout-login>
