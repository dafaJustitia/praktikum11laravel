<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Sosial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Hubungi saya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profil') }}">Biodata</a> <!-- Link menuju halaman Portofolio -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portofolio') }}">Portofolio</a> <!-- Link menuju halaman Portofolio -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CV Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/hubungi') }}">Hubungi Saya</a> <!-- Link menuju halaman Portofolio -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Header Section -->
        <header class="text-center mb-5">
            <h1>Media Sosial</h1>
            <p class="lead">Hubungi saya di platform berikut</p>
        </header>

        <!-- Social Media Section -->
        <section id="social-media" class="row text-center">
            <!-- WhatsApp -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <i class="fab fa-whatsapp fa-3x text-success mb-3"></i>
                        <h5 class="card-title">WhatsApp</h5>
                        <p class="card-text">Hubungi saya di WhatsApp.</p>
                        <a href="https://wa.me/6287776657038" target="_blank" class="btn btn-success">
                            Chat Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <!-- Instagram -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <i class="fab fa-instagram fa-3x text-danger mb-3"></i>
                        <h5 class="card-title">Instagram</h5>
                        <p class="card-text">Lihat aktivitas saya di Instagram.</p>
                        <a href="https://instagram.com/dafajustitiaa" target="_blank" class="btn btn-danger">
                            Kunjungi Instagram
                        </a>
                    </div>
                </div>
            </div>
            <!-- LinkedIn -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <i class="fab fa-linkedin fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">LinkedIn</h5>
                        <p class="card-text">Terhubung dengan saya di LinkedIn.</p>
                        <a href="https://linkedin.com/in/dafajustitiaa11" target="_blank" class="btn btn-primary">
                            Kunjungi LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer Section -->
    <footer id="footer" class="text-center mt-5">
        <p>&copy; 2024 Dafa Justitia. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
