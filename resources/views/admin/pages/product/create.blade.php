<x-admin.layout>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    </div>

    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store_product') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <!-- Product Name -->
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Product Category -->
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <input type="text" class="form-control" id="category" name="category"
                        value="{{ old('category') }}" required>
                    @error('category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Product Thumbnail -->
                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" accept="image/*"
                        required>
                    @error('thumbnail')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Product Description -->
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        required>{{ old('description') }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Product File -->
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control-file" id="file" name="file" required>
                    @error('file')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Product Price -->
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" id="price" name="price"
                        value="{{ old('price') }}" required>
                    @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Product Group -->
                <div class="form-group">
                    <label for="group">Grup Produk</label>
                    <input type="text" class="form-control" id="group" name="group"
                        value="{{ old('group') }}" required>
                    @error('group')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

</x-admin.layout>
