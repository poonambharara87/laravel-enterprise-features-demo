<x-layout/>

<div class="flex justify-between items-center p-4 bg-white shadow-md">
    <h1 class="text-2xl font-bold text-gray-800">
        Products
    </h1>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button
            type="submit"
            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-200">
            Logout
        </button>
    </form>
</div>


<div class="container mt-4">
    <table class="table table-striped table-bordered" id="products-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        $('#products-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("products.index") }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'price', name: 'price' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>