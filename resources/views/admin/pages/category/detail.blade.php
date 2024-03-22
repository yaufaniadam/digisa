<x-admin.layout>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Detail Kategori
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update_category', $category->id) }}" method="POST">
                @csrf
                <!-- Category Name -->
                <div class="form-group">
                    <label for="name">Nama Kategori *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') ?? $category->name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <!-- Category Icon -->
                <div class="form-group">
                    <label for="icon">Ikon *</label>
                    <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon') ?? $category->icon }}">
                    @error('icon')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <!-- Category Slug -->
                <div class="form-group">
                    <label for="slug">Slug *</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" value="{{ old('slug') ?? $category->slug }}">
                    @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Category URL for Catalog -->
                <div class="form-group">
                    <label for="url">URL Katalog (Google Drive) *</label>
                    <input type="url" class="form-control @error('url') is-invalid @enderror" id="url"
                        name="url" value="{{ old('url') ?? $category->url }}">
                    @error('url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</x-admin.layout>
