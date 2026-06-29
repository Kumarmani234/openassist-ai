<div class="bg-white shadow px-6 py-4 flex justify-between items-center">
    <h2 class="font-bold text-xl">
        Dashboard
    </h2>
    <div class="flex items-center gap-4">
        <span>
            {{ auth()->user()->name }}
        </span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Logout
            </button>
        </form>
    </div>
</div>