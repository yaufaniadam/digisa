<x-user.layout>
    <section class="py-5" id="features">

        <div class="container px-5 my-5">
            @if (session()->has('success'))
                <div class="alert alert-success justify-content-between d-flex" role="alert">
                    <span>
                        {{ session()->get('success') }}
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
                            <form action="{{ route('user.update_password', $user->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="old_password" class="form-label">Password Lama</label>
                                    <input type="password" name="old_password"
                                        class="form-control @error('old_password') is-invalid @enderror"
                                        id="old_password">
                                    @error('old_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">Password Baru</label>
                                    <input type="password" name="new_password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        id="new_password">
                                    @error('new_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">Konfirmasi Password
                                        Baru</label>
                                    <input type="password" name="new_password_confirmation"
                                        class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                        id="new_password_confirmation">
                                    @error('new_password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
    </section>
</x-user.layout>
