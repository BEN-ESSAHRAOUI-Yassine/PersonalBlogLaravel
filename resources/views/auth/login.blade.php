@extends('layouts.app')

@section('content')

<div class="auth-box">

    <h1>Login</h1>
    <p class="mb-3">Welcome back blogger.</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit">
            Sign In
        </button>
    </form>

    <div class="demo-box">
        blogger@mail.com / password
    </div>

</div>

@endsection