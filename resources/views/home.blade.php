<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Animasi Hover Tombol */
        .btn-hover:hover {
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
        /* Background */
        body {
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        /* Hero Section */
        .hero {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            text-align: center;
            font-weight: 600;
            border-top: 2px solid rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #ff4d6d, #ff1e56);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-box-seam"></i> Sistem Manajemen Inventaris
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero text-white">
        <div class="text-center">
            <h1 class="fw-bold">Selamat Datang di <span class="text-warning">Sistem Inventaris</span></h1>
            <p class="fs-5">Kelola barang dengan mudah dan cepat.</p>
            <a href="{{ route('barang.index') }}" class="btn btn-lg text-white fw-semibold btn-hover" style="background: linear-gradient(to right, #ff4d6d, #ff1e56); border: none;">
                <i class="bi bi-box-arrow-in-right"></i> Lihat Barang
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-dark">
        <p class="mb-1">© 2025 Sistem Inventaris - Dibuat dengan ❤️ oleh</p>
        <p>Muhammad Tiflan Fakri Akbar, Naufal Akbar, Muhammad Fatih Alfadhil</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
