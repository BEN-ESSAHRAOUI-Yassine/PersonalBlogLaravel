<header class="site-header">
    <div class="container nav-wrapper">

        <a href="{{ route('home') }}" class="logo">
            DevBlog
        </a>

        <nav>
            @guest
                <a href="{{ route('login') }}">Login</a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>

                <form method="POST"
                      action="{{ route('logout') }}"
                      class="inline-form">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            @endauth
        </nav>

    </div>
</header>