
<x-user.layout>

    <section class="pt-40 pb-20">
        <div class="container">

           

            <div class="text-center">            
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3">Katalog</h1>
            </div>

        

            <div class="">
              
                <div>

                    <div class="grid xl:grid-cols-4 md:grid-cols-4 grid-cols-4 pt-2 md:pt-12 gap-2 md:gap-4">
                        @foreach ($categories as $category)
                            <a href="{{ $category->url }}" target="_blank"
                                class="p-1 hover:bg-white rounded-md hover:shadow-xl transition-all duration-500 flex flex-col items-center">
                                <div class="w-12 h-12 rounded-md flex items-center justify-center">
                                    <img src="{{ asset('front/images/ikon/' . $category->icon) }}" class="h-10" />
                                </div>
                                <h4 class="text-center text-xs lg:text-base font-medium mt-4 md:my-4">{{ $category->name }}
                                </h4>
                            </a>
                        @endforeach
    
    
                    </div>
    

                </div>

            </div>


        </div>
    </section>


</x-user.layout>

