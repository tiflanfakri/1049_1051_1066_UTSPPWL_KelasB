<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Inventaris Barang') }}</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<style>
    body {
        background: linear-gradient(to right, #ff758c, #ff7eb3);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .navbar-custom {
        background: linear-gradient(to right, #ff4b7b, #ff6382);
    }

    .navbar-brand {
        font-weight: bold;
        color: white !important;
    }

    .navbar-toggler {
        border: none;
    }

    .nav-link {
        color: white !important;
        font-weight: 600;
    }

    .container-auth {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .auth-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    .auth-btn {
        background: linear-gradient(to right, #ff4b7b, #ff6382);
        color: white;
        border: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .auth-btn:hover {
        background: linear-gradient(to right, #ff3b73, #ff4b8f);
    }

    .footer {
        text-align: center;
        padding: 10px;
        font-size: 14px;
        color: white;
        margin-top: auto;
    }
</style>
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    WELCOME
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="container-auth">
            <div class="auth-card">
                <h3 class="mb-4 fw-bold text-danger">Selamat Datang</h3>
                <p class="mb-4 text-muted">Silakan login atau daftar untuk melanjutkan</p>

                <a href="{{ route('login') }}" class="btn auth-btn w-100 mb-3">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>

                <a href="{{ route('register') }}" class="btn btn-outline-danger w-100">
                    <i class="bi bi-person-plus"></i> Register
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }} - Di Buat Oleh Muhammad Faih Alfadhil, Muhammad Tiflan Fakri Akbar, Muhammad Naufal Akbar.
        </footer>
    </div>
</body>

</html>
