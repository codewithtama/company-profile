<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }
        #sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            transition: all 0.3s;
        }
        #sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 15px 20px;
        }
        #sidebar .nav-link:hover, #sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        #content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div id="sidebar" class="d-flex flex-column">
        <div class="p-3 mb-3 border-bottom">
            <h4>Admin Panel</h4>
        </div>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.artikel.index') }}" class="nav-link {{ request()->routeIs('admin.artikel.*') ? 'active' : '' }}">
                    <i class="bi bi-journal-text me-2"></i> Artikel
                </a>
            </li>
            <li>
                <a href="{{ route('admin.layanan.index') }}" class="nav-link {{ request()->routeIs('admin.layanan.*') ? 'active' : '' }}">
                    <i class="bi bi-briefcase me-2"></i> Layanan
                </a>
            </li>
            <li class="mt-4 border-top pt-2">
                <a href="{{ route('home') }}" class="nav-link" target="_blank">
                    <i class="bi bi-house me-2"></i> Lihat Website
                </a>
            </li>
        </ul>
    </div>

    <div id="content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
