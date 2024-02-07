<x-user.layout>
    <section class="py-5" id="features">

        <div class="container px-5 my-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-6">
                    <h2 class="mb-5">Selamat Datang Kembali!</h2>

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('public.attempt_login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('email')
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
                        <p>
                            <a href="{{ route('public.forgot_password') }}">Lupa password anda?</a>
                        </p>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
