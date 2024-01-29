<x-admin.layout>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Grup</h1>
    </div>

    <div class="card">
        <div class="card-header">
            Grup Baru
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store_group') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <!-- Group Name -->
                <div class="form-group">
                    <label for="name">Nama Grup</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</x-admin.layout>
