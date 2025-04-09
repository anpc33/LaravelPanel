<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaravelPanel')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #64748b;
            --success: #22c55e;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --light: #f1f5f9;
            --dark: #1e293b;
            --gray: #94a3b8;
            --gray-light: #e2e8f0;
            --white: #ffffff;
            --sidebar-width: 280px;
            --header-height: 70px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: var(--dark);
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background: var(--white);
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
            z-index: 1000;
            transition: all 0.3s;
        }

        .sidebar-brand {
            height: var(--header-height);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            background: var(--white);
            border-bottom: 1px solid var(--gray-light);
        }

        .sidebar-brand h1 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary);
            margin: 0;
        }

        .sidebar-nav {
            padding: 1.5rem 0;
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .sidebar .nav-item {
            margin: 0.5rem 1rem;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--secondary);
            border-radius: 0.5rem;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover {
            color: var(--primary);
            background: rgba(99, 102, 241, 0.1);
        }

        .sidebar .nav-link.active {
            color: var(--primary);
            background: rgba(99, 102, 241, 0.1);
            font-weight: 500;
        }

        .sidebar .nav-link i {
            width: 20px;
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* Topbar Styles */
        .topbar {
            height: var(--header-height);
            background: var(--white);
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
            padding: 0 1.5rem;
        }

        .topbar .navbar-nav {
            flex-direction: row;
        }

        .topbar .nav-item {
            margin-left: 1rem;
        }

        .topbar .nav-link {
            color: var(--secondary);
            padding: 0.5rem;
        }

        .topbar .nav-link:hover {
            color: var(--primary);
        }

        .user-dropdown .dropdown-toggle::after {
            display: none;
        }

        .user-dropdown .dropdown-menu {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 0.5rem;
            padding: 0.5rem;
            min-width: 200px;
        }

        .user-dropdown .dropdown-item {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            color: var(--secondary);
        }

        .user-dropdown .dropdown-item:hover {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
        }

        .user-dropdown .dropdown-item i {
            width: 20px;
            margin-right: 0.5rem;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
            margin-bottom: 1.5rem;
        }

        .card-header {
            background: var(--white);
            border-bottom: 1px solid var(--gray-light);
            padding: 1.25rem 1.5rem;
        }

        .card-header h6 {
            margin: 0;
            color: var(--dark);
            font-weight: 600;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Table Styles */
        .table {
            margin-bottom: 0;
        }

        .table th {
            background: var(--light);
            color: var(--secondary);
            font-weight: 600;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--gray-light);
        }

        .table td {
            padding: 1rem 1.5rem;
            vertical-align: middle;
            color: var(--dark);
            border-bottom: 1px solid var(--gray-light);
        }

        /* Button Styles */
        .btn {
            padding: 0.625rem 1.25rem;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: all 0.3s;
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-success {
            background: var(--success);
            border-color: var(--success);
        }

        .btn-danger {
            background: var(--danger);
            border-color: var(--danger);
        }

        /* Form Styles */
        .form-control {
            border-radius: 0.5rem;
            padding: 0.625rem 1rem;
            border: 1px solid var(--gray-light);
            color: var(--dark);
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }

            .sidebar.toggled {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.toggled {
                margin-left: var(--sidebar-width);
            }
        }
    </style>
    @stack('styles')
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1>LaravelPanel</h1>
        </div>
        <ul class="sidebar-nav">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}"
                    class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}"
                    class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Category Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.products.index') }}"
                    class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Product Management</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="main-content">
        <nav class="navbar navbar-expand navbar-light topbar">
            <button class="btn btn-link d-md-none rounded-circle" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown user-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown">
                        <span class="me-2 d-none d-lg-inline">{{ Auth::user()->name }}</span>
                        <img class="rounded-circle"
                            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=6366f1&color=fff"
                            width="32" height="32">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt fa-sm"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="container-fluid py-4">
            @yield('content')
        </div>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-muted">© 2024 LaravelPanel. All rights reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <span class="text-muted">Source: <a href="https://github.com/anpc33"
                                target="_blank">anpc33</a></span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom JS -->
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('toggled');
            document.querySelector('.main-content').classList.toggle('toggled');
        });
    </script>
    @stack('scripts')
</body>

</html>
