<x-user.layout>
    <section class="py-5" id="features">

        <div class="container px-5 my-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-6">
                    <h2 class="mb-5">Selamat Datang Kembali!</h2>
                    <form action="{{ route('public.attempt_login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
