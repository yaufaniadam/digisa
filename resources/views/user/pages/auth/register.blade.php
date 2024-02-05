<x-user.layout>
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-6">
                    <h2 class="mb-5 text-center">Registrasi Akun Baru</h2>

                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <form action="{{ route('public.register_new_account') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                            <input type="text" name="phone"
                                class="form-control @error('phone') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Instansi</label>
                            <input type="text" name="organization_name"
                                class="form-control @error('organization_name') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{ old('organization_name') }}">
                            @error('organization_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keperluan Mendaftar</label>
                            <textarea name="purposes" id="" class="form-control @error('purposes') is-invalid @enderror" cols="30"
                                rows="10">{{ old('purposes') }}</textarea>
                            @error('purposes')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="exampleInputPassword1">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Daftar</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
