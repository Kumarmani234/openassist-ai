<!DOCTYPE html>
<html>

<head>
    <title>
        OpenAssist AI
    </title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        @include('components.sidebar')
        <div class="flex-1">
            @include('components.navbar')
            <main class="p-6">
                @yield('content')

            </main>
        </div>
    </div>
</body>
</html>