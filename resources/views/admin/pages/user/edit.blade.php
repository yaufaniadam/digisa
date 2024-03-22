<x-admin.layout>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pengguna</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Data Pengguna
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update_user', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Group Name -->
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') ?? $user->name }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Instansi</label>
                            <input type="text" class="form-control @error('organization_name') is-invalid @enderror"
                                id="organization_name" name="organization_name"
                                value="{{ old('organization_name') ?? $user->organization_name }}" required>
                            @error('organization_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        @if ($user->status_id != 1)
                            <div class="form-group">
                                <label for="name">Keperluan Mendaftar</label>
                                <textarea class="form-control" disabled>{{ $user->registrationPurpose->purposes }}</textarea>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Status Pengguna
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.verify_user', $user->id) }}" method="POST">
                        @csrf
                        <div class="d-flex mb-2">
                            <span class="mr-2">Status Saat Ini : </span>
                            <span>{{ $user->statusId->name }}</span>
                        </div>
                        <div class="form-group">
                            <select name="status_id"class="form-control">
                                <option>Pilih Status</option>
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Update Status Pengguna</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-admin.layout>
