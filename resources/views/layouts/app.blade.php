<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow p-4">
    <div class="max-w-6xl mx-auto flex justify-between">
        <a href="{{ route('home') }}" class="font-bold">
            Blog
        </a>

        <div class="space-x-3">

            @guest
                <a href="{{ route('login') }}">Login</a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <form method="POST"
                      action="{{ route('logout') }}"
                      class="inline">
                    @csrf
                    <button>
                        Logout
                    </button>
                </form>
            @endauth

        </div>
    </div>
</nav>

<div class="max-w-6xl mx-auto p-6">
    @if(session('success'))
        <div class="bg-green-200 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>