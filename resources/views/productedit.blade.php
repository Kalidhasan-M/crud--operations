<x-app-layout>
    <div class="container mt-5">
        <h2>Edit Product</h2>
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description">{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('Products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</x-app-layout>
