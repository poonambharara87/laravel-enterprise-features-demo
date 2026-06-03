<x-layout/>
<div class="container mx-auto max-w-2xl py-8">
    <h1 class="text-2xl font-semibold mb-6">Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                class="w-full border rounded px-3 py-2"
                required
            />
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium mb-1">Description</label>
            <textarea
                name="description"
                id="description"
                rows="4"
                class="w-full border rounded px-3 py-2"
                required
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium mb-1">Price</label>
            <input
                type="number"
                name="price"
                id="price"
                step="0.01"
                value="{{ old('price') }}"
                class="w-full border rounded px-3 py-2"
                required
            />
            @error('price')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="quantity" class="block text-sm font-medium mb-1">Quantity</label>
            <input
                type="number"
                name="quantity"
                id="quantity"
                value="{{ old('quantity', 1) }}"
                class="w-full border rounded px-3 py-2"
                min="0"
                required
            />
            @error('quantity')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded">
            Save Product
        </button>
    </form>
</div>