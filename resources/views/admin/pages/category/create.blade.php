<x-admin.layout>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
    </div>

    <div class="card">
        <div class="card-header">
            Kategori Baru
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store_category') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <!-- Category Name -->
                <div class="form-group">
                    <label for="name">Nama Kategori</label>
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
