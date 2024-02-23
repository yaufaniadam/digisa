<x-user.layout-login>


    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-xl text-gray-800 mt-2">Unduh </h3>
                    <p class="mt-1 font-medium mb-4">Berkas saya.</p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row mt-2 gap-6">
                <div class="w-full ">
                 

                        @if ($files->count() > 0)

                            @foreach ($files as $file)

                            <div data-fc-type="accordion" class="">                              
                                <div class="rounded-lg mt-0 mb-3 ">
                                    <button
                                        class="bg-white rounded-lg text-gray-900 py-6 px-6 inline-flex items-center justify-between w-full font-semibold text-left transition"
                                        data-fc-type="collapse">
                                        {{ $file->product->name }}
                                        <span
                                            class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </button>
                                    <div class="hidden w-full overflow-hidden transition-[height] duration-300 bg-slate-30">

                                        <div class="p-6 mt-1 rounded-lg bg-white">
                                            <h5><i class="fas fa-exclamation-triangle"></i> Ketentuan Mengunduh</h5>
                                            <ol class="list-decimal ms-4 text-gray-700 pt-3 p-3">
                                                <li>File milik Suara 'Aisyiyah tidak boleh disebarluaskan untuk tujuan komersil </li>                                           
                                                <li>Dengan menekan tombol <strong>Unduh</strong>, berarti Saudara setuju dengan ketentuan di atas.</li>
                                            </ol>

                                            <a href="{{ route('user.download_file', $file->id) }}"
                                            class="w-full md:w-1/5 bg-green-500 text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-success/30"
                                            type="submit">Saya mengerti & unduh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                
                            @endforeach
                        @else
                            Belum ada berkas.
                        @endif


                  
                </div>


            </div>
        </div>
    </section>

</x-user.layout-login>
