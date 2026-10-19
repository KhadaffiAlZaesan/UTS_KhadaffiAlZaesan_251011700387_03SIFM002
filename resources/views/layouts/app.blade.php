<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Daftar Film') | UTS Rekayasa Web</title>
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('movies.index') }}">🎬 Daftar Film</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('movies.index') ? 'active' : '' }}"
                           href="{{ route('movies.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('movies.show') ? 'active' : '' }}"
                           href="{{ route('movies.index') }}#daftar">Daftar Film</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-fill">
        @yield('content')
    </main>

    <footer class="bg-dark text-light text-center py-3 mt-4">
        <small>&copy; 2026 Daftar Film &mdash; UTS Rekayasa Web &mdash; Universitas Pamulang</small>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
