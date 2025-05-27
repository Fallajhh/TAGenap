<!DOCTYPE html>
<html>
<head>
    <title>Petcarepedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Petcarepedia</a>
        @auth
        <div class="ms-auto d-flex align-items-center">
            <span class="text-white me-3">Halo, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
            </form>
        </div>
        @endauth
    </div>
</nav>

<div class="container">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">&larr; Kembali ke Dashboard</a>
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
