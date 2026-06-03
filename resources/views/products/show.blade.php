<x-layout/>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Product Details</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>Name:</strong></label>
                        <p class="form-control-plaintext">{{ $product->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Description:</strong></label>
                        <p class="form-control-plaintext">{{ $product->description ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Price:</strong></label>
                        <p class="form-control-plaintext">${{ number_format($product->price, 2) }}</p>
                    </div>

                    @if($product->image)
                    <div class="mb-3">
                        <label class="form-label"><strong>Image:</strong></label>
                        <br>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="max-width: 300px;">
                    </div>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>