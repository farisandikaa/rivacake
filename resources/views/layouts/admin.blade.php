<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel - Riva Cake')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fc;
        }
        .nav-link.active {
            background-color: #e9ecef;
            border-radius: 8px;
        }
        .sidebar {
            min-height: 100vh;
        }
    </style>

    @stack('styles')
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i> Admin Panel
        </a>
        <div class="d-flex align-items-center">
            <span class="text-white me-3">
                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
            </span>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-light">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Main Layout -->
<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-white shadow-sm p-0 sidebar">
            <nav class="nav flex-column p-3">
                <a href="{{ route('dashboard') }}" 
                   class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-bold text-primary' : 'text-dark' }}">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
                <a href="{{ route('posts.index') }}" 
                   class="nav-link {{ request()->routeIs('posts.*') ? 'active fw-bold text-primary' : 'text-dark' }}">
                    <i class="bi bi-journal-text"></i>Kelola Gallery
                </a>
                <a href="{{ route('shop-items.index') }}" 
                   class="nav-link {{ request()->routeIs('shop-items.*') ? 'active fw-bold text-primary' : 'text-dark' }}">
                    <i class="bi bi-journal-text"></i>Kelola Shop
                </a>
                <a href="{{ route('users.index') }}" 
                   class="nav-link {{ request()->routeIs('users.*') ? 'active fw-bold text-primary' : 'text-dark' }}">
                    <i class="bi bi-people-fill me-2"></i>Kelola User
                </a>
                
   
            
             
            </nav>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 py-4">
            @yield('content')
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>
