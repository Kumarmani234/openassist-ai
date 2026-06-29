@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold mb-6">
        Dashboard
    </h1>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <p class="text-gray-500">
                Total Chats
            </p>
            <h2 class="text-4xl font-bold">
                0
            </h2>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <p class="text-gray-500">
                AI Models
            </p>
            <h2 class="text-4xl font-bold">
                0
            </h2>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <p class="text-gray-500">
                Projects
            </p>
            <h2 class="text-4xl font-bold">
                0
            </h2>
        </div>
    </div>
    <div class="mt-6 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold">
            Welcome to OpenAssist AI
        </h2>
        <p class="text-gray-600 mt-2">
            Open source AI SaaS platform.
        </p>
    </div>
@endsection