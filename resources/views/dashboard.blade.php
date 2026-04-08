<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f4f8; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">🛡️ Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Landing Page</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            👤 {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h2 class="fw-bold">Welcome back, {{ Auth::user()->name }}! 👋</h2>
                <p class="text-muted">You are logged in as <strong>{{ Auth::user()->email }}</strong></p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h1 class="display-4">🔐</h1>
                    <h5 class="fw-bold">Secure Access</h5>
                    <p class="text-muted">Only authenticated users can see this dashboard.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h1 class="display-4">📊</h1>
                    <h5 class="fw-bold">Your Stats</h5>
                    <p class="text-muted">Account created and session active.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h1 class="display-4">⚙️</h1>
                    <h5 class="fw-bold">Settings</h5>
                    <p class="text-muted">Manage your profile and preferences.</p>
                </div>
            </div>
        </div>

        <div class="alert alert-success mt-4">
            ✅ This is a <strong>protected view</strong>. Guest users are redirected automatically.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>