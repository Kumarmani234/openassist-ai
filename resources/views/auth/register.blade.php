<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-md w-96">
        <h1 class="text-2xl font-bold text-center mb-6">
            Create Account
        </h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input class="w-full border rounded p-3 mb-3" name="name" placeholder="Name">
            <input class="w-full border rounded p-3 mb-3" name="email" type="email" placeholder="Email">
            <input class="w-full border rounded p-3 mb-3" name="password" type="password" placeholder="Password">
            <input class="w-full border rounded p-3 mb-3" name="password_confirmation" type="password"
                placeholder="Confirm Password">
            <button class="w-full bg-gray-900 text-white p-3 rounded">
                Register
            </button>
        </form>
    </div>
</div>