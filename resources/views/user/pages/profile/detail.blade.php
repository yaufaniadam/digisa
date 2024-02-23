<x-user.layout-login>

    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-xl text-gray-800 mt-2">Profil </h3>
                    <p class="mt-1 font-medium mb-4">Pengaturan profil</p>
                </div>
            </div>
            
            <div class="flex mt-2">
                <div class="w-full">
                    <div class="bg-white rounded">
                        <div class="p-6">
                            <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                <!-- menu start -->
                                <div class="col-span-1">
                                    <nav aria-label="Tabs" class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-slate-100 p-1.5 rounded-md lg:justify-start" role="tablist">
                                        <button class="fc-tab-active:bg-white fc-tab-active:text-primary text-start py-2 px-4 rounded bg-transparent transition-all active" data-fc-target="#account" type="button">
                                            Akun Saya
                                        </button>
                                        <button class="fc-tab-active:bg-white fc-tab-active:text-primary text-start py-2 px-4 rounded bg-transparent transition-all" data-fc-target="#password" type="button">
                                            Ubah Sandi
                                        </button>
                                      
                                    </nav>
                                </div>
                                <!-- menu end -->
                                <div class="lg:col-span-3 transition-all px-4 h-full">
                                    <div id="account" class="min-h-[650px]">
                                        <h4 class="text-base text-gray-800 mb-6">Akun Saya</h4>

                                        <form action="#" class="">                                         

                                            <!-- basic info start -->
                                            <div class="grid grid-cols-2 items-center gap-6">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">Name<small>*</small></label>
                                                        <input type="text" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="name" placeholder="Your Name" name="name" value="Greeva Navadiya">
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="email" class="block text-sm font-semibold mb-1 text-gray-600">Email<small>*</small></label>
                                                        <input type="email" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="email" placeholder="Email" name="email" value="greeva@coderthemes.com">
                                                    </div>
                                                </div>

                                                <div class="">                                    
                                                    <div class="mb-4">
                                                        <label class="block text-sm font-semibold mb-1 text-gray-600">Telepon<small>*</small></label>
                                                        <input type="text" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="phone" name="phone" placeholder="Phone number" value="+1 254 024 5400">
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">Instansi<small>*</small></label>
                                                        <input type="text" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="name" placeholder="Your Name" name="name" value="Greeva Navadiya">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- basic info end -->

                                            
                                            <hr class="my-4">

                                            <!-- save start -->
                                            <div class="flex mt-3">
                                                <div class="w-full">
                                                    <button type="submit" class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all hover:shadow-lg bg-primary text-white hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 ">Simpan</button>
                                                </div>
                                            </div>
                                            <!-- save end -->
                                        </form>
                                    </div><!-- end tab -->

                                    <div id="password" class="hidden min-h-[650px]">
                                        <h4 class="text-base text-gray-800">Password</h4>
                                        
                                        <form action="#" class="mt-6">
                                            <div class="mb-4">
                                                <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">Current Password<small>*</small></label>
                                                <input type="password" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="current_password" aria-describedby="current_password" name="current_password">
                                            </div>

                                            <div class="mb-4">
                                                <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">New Password<small>*</small></label>
                                                <input type="password" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="new_password" aria-describedby="current_password" name="new_password">
                                            </div>

                                            <div class="mb-4">
                                                <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">Confirm Password<small>*</small></label>
                                                <input type="password" class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" id="confirm_password" aria-describedby="current_password" name="confirm_password">
                                            </div>

                                            <hr class="my-6">

                                            <!-- save start -->
                                            <div class="row mt-3">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all hover:shadow-lg bg-primary text-white hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40">Update Password</button>
                                                </div>
                                            </div>
                                            <!-- save end -->
                                        </form>
                                    </div><!-- end tab -->

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-5" id="features">

        <div class="container px-5 my-5">
            @if (session()->has('success'))
                <div class="alert alert-success justify-content-between d-flex" role="alert">
                    <span>
                        {{ session()->get('success') }}
                    </span>
                </div>
            @endif

            @if (session()->has('warning'))
                <div class="alert alert-warning justify-content-between d-flex" role="alert">
                    <span>
                        {{ session()->get('warning') }}
                    </span>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger justify-content-between d-flex" role="alert">
                    <span>
                        {{ session()->get('error') }}
                    </span>
                </div>
            @endif

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-8">
                    <div class="card">
                        <div class="card-header">
                            Profile
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update_profile', $user->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        value="{{ $user->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="organization_name" class="form-label">Nama Instansi</label>
                                    <input type="text" name="organization_name"
                                        class="form-control @error('organization_name') is-invalid @enderror"
                                        id="organization_name" value="{{ $user->organization_name }}">
                                    @error('organization_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <a href="{{ route('user.edit_password') }}">Ubah Password</a>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</x-user.layout-login>
