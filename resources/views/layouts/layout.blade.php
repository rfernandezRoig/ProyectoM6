<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Pobles</a>
            <div>
                @auth
                    <span class="mr-4">{{ Auth::user()->name }}</span>
                    <a href="{{ route('create') }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Crear Poble</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                            Sortir
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white mr-4">Login</a>
                @endauth
            </div>
        </div>
    </header>

    <main class="container mx-auto my-10">
        @yield('content')
    </main>
</body>
</html>
