<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio saya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/profil')); ?>">Biodata</a> <!-- Link menuju halaman Portofolio -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/portofolio')); ?>">Portofolio</a> <!-- Link menuju halaman Portofolio -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CV Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/hubungi')); ?>">Hubungi Saya</a> <!-- Link menuju halaman Portofolio -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Header Section -->
        <header class="text-center mb-4">
            <h1>Portofolio</h1>
            <p class="lead">Lihat portofolio saya di platform ini</p>
        </header>

        <!-- Social Media Section -->
        <section id="portofolio" class="row text-center">
            <div class="d-flex justify-content-center">
                <div class="card shadow text-center">
                    <div class="card-body">
                        <i class="fab fa-github fa-3x text-dark mb-3"></i>
                        <h5 class="card-title">GitHub</h5>
                        <p class="card-text">Lihat proyek saya di GitHub.</p>
                        <a href="https://github.com/dafaJustitia" target="_blank" class="btn btn-dark">
                            Kunjungi GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </section>
    <!-- Footer Section -->
    <footer id="footer" class="text-center mt-5">
        <p>&copy; 2024 Dafa Justitia. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\MOKLET-2\Documents\Semester 3 PAW\LARAVEL\Prak11\resources\views/portofolio.blade.php ENDPATH**/ ?>