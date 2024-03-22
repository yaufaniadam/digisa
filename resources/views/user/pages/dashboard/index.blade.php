<x-user.layout-login>
    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-xl text-gray-800 mt-2">Salam, {{ auth()->user()->name }}</h3>
                    <p class="mt-1 font-medium mb-4">Selamat datang di Digisa!</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-2">
                <!-- profile widget star -->
                <div class="lg:col-span-6 col-span-12">
                    <div class="bg-white rounded">
                        <div class="p-6">
                            <div class="flex">
                                <div class="grow">
                                    <div class="flex">

                                        <div class="grow">
                                            <h4 class="tetx-lg text-gray-800 mb-1 mt-0 font-semibold">
                                                {{ auth()->user()->name }}</h4>
                                            <p class="text-gray-400 pb-0 text-sm mb-4 font-medium">
                                                {{ auth()->user()->organization_name }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="flex gap-4 flex-wrap py-4 border-b">
                                <div class="mb-2">
                                    <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-mail icon-xs icon me-1">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>{{ auth()->user()->email }}</a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-phone icon-xxs icon me-2">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>{{ auth()->user()->phone }}</a>
                                </div>
                            </div>

                            {{-- <div class="flex items-center gap-6 mt-4">
                                <div class="w-full">
                                    <div class="flex justify-between mb-3">
                                        <h6 class="fw-medium my-0">Lengkapi Profil Anda</h6>
                                        <p class="float-end mb-0">85%</p>
                                    </div>
                                    <div
                                        class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary"
                                            role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- profile widget end -->

                <div class="lg:col-span-6 col-span-12 space-y-6">
                    <div class="bg-white">
                        <div class="flex items-center p-6">
                            <div class="">
                                <div
                                    class="inline-flex items-center justify-center h-12 w-12 bg-green-500/10 rounded me-3">
                                    <i class="fas fa-receipt text-success text-xl"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="text-xl text-gray-800">1</h3>
                                <p class="text-muted mb-0">Tagihan</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center p-6">
                            <div class="">
                                <div
                                    class="inline-flex items-center justify-center h-12 w-12 bg-sky-500/10 rounded me-3">
                                    <i class="fas fa-file text-success  text-xl"></i>
                                </div>
                            </div>
                            <div class="grow">
                                <h3 class="text-xl text-gray-800">21</h3>
                                <p class="text-muted mb-0">Berkas</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- end grid -->
        </div>
    </section>



    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex items-center justify-between my-6">
                <div class="">
                    <h4 class="text-base text-gray-800">Transaksi</h4>
                </div>
                <div class="text-end">
                    <a href="{{ route('user.transactions') }}" class="font-semibold text-primary text-sm">Semua <svg class="h-5 w-5 inline"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right ms-1 icon-xxs">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div><!-- end title -->

            <div class="flex flex-col gap-y-2 w-full mb-4">

                @if ($transactions->count() > 0)

                    @foreach ($transactions as $transaction)
                        <a href="{{ route('user.transaction_detail', $transaction->id) }}">
                            <div class="p-6 flex bg-white gap-6 first:rounded-t-xl last:rounded-b-xl hover:bg-slate-50">
                                <div class="w-1/2 flex flex-col md:flex-row gap-1 md:gap-3">
                                    <p>INV-{{ $transaction->id }}</p>
                                    <p class="text-gray-400">
                                        {{ $transaction->created_at->isoFormat('dddd, d MMMM Y, HH:mm:ss') }}</p>
                                </div>
                                <div class="w-1/2 flex items-center justify-end">
                                    <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                        <p class="font-bold text-gray-900">Rp {{ $transaction->payment_amount }}</p>


                                        @if ($transaction->status === 'pending')
                                            <p class="text-right"><span
                                                    class="bg-red-50 text-red-800 text-sm font-medium px-2.5 py-1 rounded dark:bg-green-900 dark:text-green-300">Pending</span>
                                            </p>
                                        @else
                                            <p class="text-right"><span
                                                    class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-1 rounded dark:bg-green-900 dark:text-green-300">Lunas</span>
                                            </p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    Belum ada transaksi.
                @endif


            </div>

        </div>
    </section>

</x-user.layout-login>
