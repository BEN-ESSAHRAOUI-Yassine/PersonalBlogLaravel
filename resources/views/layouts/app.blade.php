<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

@include('partials.header')

<main class="container py-5">
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

@include('partials.footer')

</body>
</html>