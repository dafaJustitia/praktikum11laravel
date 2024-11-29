<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Laravel compiled CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Profil Saya</a>
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
            <h1>Profil Biodata</h1>
            <p class="lead">Informasi singkat tentang saya</p>
        </header>

        <!-- Biodata Section -->
        <div id="biodata" class="card shadow">
            <div class="card-body">
                <div class="row">
                    <!-- Photo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ Vite::asset('resources/images/fotoprofil.jpeg') }}" alt="Foto Profil" class="rounded-circle img-thumbnail responsive-image">
                    </div>
                    <!-- Information -->
                    <div class="col-md-8">
                        <h2>Nama Lengkap</h2>
                        <p>Dafa Adham Justitia</p>

                        <h2>Alamat</h2>
                        <p>Jl. Ketintang No 97, Surabaya</p>

                        <h2>Deskripsi</h2>
                        <p>
                            ‎ ‎ ‎ ‎ ‎ Sebelumnya saya adalah alumni SMK Telkom Malang, sebuah sekolah kejuruan yang fokus pada teknologi dan telekomunikasi.
                            Di sana, saya mendapatkan banyak pengalaman berharga dalam dunia teknologi, terutama dalam bidang jaringan komputer dan pemrograman.
                            Saat ini, saya melanjutkan pendidikan di Telkom University Surabaya, mengambil program studi Sistem Informasi. Saya sangat tertarik dengan
                            teknologi yang berhubungan dengan pemrograman web, pengembangan perangkat lunak, dan integrasi sistem yang efektif.
                        </p>
                        <p>
                            ‎ ‎ ‎ Saya berkeinginan untuk menjadi web developer fullstack, maka dari itu saya saat ini mengambil jurusan
                            yang sesuai dengan passion saya. Silakan ke halaman hubungi saya untuk mengetahui informasi kontak
                            apabila berminat untuk mengajak saya berkolaborasi :p
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <footer id="footer" class="text-center mt-5">
            <p>&copy; 2024 Dafa Justitia. All rights reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
