<?php
$username = $_SESSION['username'] ?? 'admin';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Sistem Informasi Akademik</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">


    <!-- Navbar -->

    <nav class="navbar navbar-dark bg-primary shadow-sm">

        <div class="container">

            <a
                class="navbar-brand fw-bold"
                href="/SI-AKADEMIK/public/dashboard">

                SI AKADEMIK

            </a>

            <a
                href="/SI-AKADEMIK/public/logout"
                class="btn btn-light btn-sm">

                Logout

            </a>

        </div>

    </nav>


    <!-- Content -->

    <div class="container py-5">


        <!-- Welcome -->

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body p-4">

                <h2 class="fw-bold text-primary mb-2">
                    Dashboard
                </h2>

                <p class="mb-1">

                    Selamat datang,
                    <strong>
                        <?= ucfirst (htmlspecialchars($username)); ?>
                    </strong>! 👋🏻

                </p>

                <p class="text-muted mb-0">

                    Sistem Informasi Akademik
                    Politeknik Negeri Jember.

                </p>

            </div>

        </div>


        <!-- Menu -->

        <h4 class="fw-bold text-dark mb-3">
            Menu Akademik
        </h4>


        <div class="row g-4">


            <!-- Mahasiswa -->

            <div class="col-md-6">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <h5 class="fw-bold text-dark">
                           🧑🏻‍🎓 Data Mahasiswa
                        </h5>

                        <p class="text-muted">
                            Melihat data mahasiswa dalam sistem akademik.
                        </p>

                        <a
                            href="/SI-AKADEMIK/public/mahasiswa"
                            class="btn btn-primary">

                            Lihat Mahasiswa

                        </a>

                    </div>

                </div>

            </div>


            <!-- Dosen -->

            <div class="col-md-6">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <h5 class="fw-bold text-dark">
                           🧑🏻‍💻 Data Dosen
                        </h5>

                        <p class="text-muted">
                            Melihat data dosen dalam sistem akademik.
                        </p>

                        <a
                            href="/SI-AKADEMIK/public/dosen"
                            class="btn btn-primary">

                            Lihat Dosen

                        </a>

                    </div>

                </div>

            </div>


        </div>


        <!-- Footer -->

        <div class="text-center mt-4">

            <span class="badge bg-primary px-3 py-2">

               🎓 Politeknik Negeri Jember

            </span>

        </div>


    </div>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>