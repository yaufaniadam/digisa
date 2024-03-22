<x-user.layout>
    <section class="py-5" id="features">

        <div class="container px-5 my-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-6">
                    <h2 class="mb-5">Lupa password anda?</h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('email') }}
                        </div>
                    @endif

                    <form action="{{ route('password.email') }}" method="POST">
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
                            <div id="emailHelp" class="form-text">
                                Masukkan email yang anda gunakan untuk mendaftar. Kami akan mengirimkan link untuk
                                mereset password anda.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
