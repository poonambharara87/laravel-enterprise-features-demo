
<x-layout/>

<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-8 border border-gray-300 rounded-lg">
        <h2 class="text-2xl font-semibold mb-6">Login</h2>

        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">
                    Email Address
                </label>
                <input type="email" id="email" name="email"
                    value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">
                    Password
                </label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <button type="submit"
                class="bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-800">
                Login
            </button>
        </form>
    </div>
</div>
