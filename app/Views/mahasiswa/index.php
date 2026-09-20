
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa - Sistem Informasi Akademik</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary shadow">

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

        <!-- Header -->
        <div class="mb-4">

            <h2 class="fw-bold text-primary mb-1">
                🧑🏻‍🎓 Data Mahasiswa
            </h2>

            <p class="text-muted">
                Daftar mahasiswa Sistem Informasi Akademik
            </p>

        </div>

        <!-- Card -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <!-- Judul -->
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h5 class="fw-bold mb-0">
                        Daftar Mahasiswa
                    </h5>

                    <a
                        href="/SI-AKADEMIK/public/dosen"
                        class="btn btn-primary btn-sm">

                        Data Dosen

                    </a>

                </div>

                <!-- Table -->
                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-primary">

                            <tr>

                                <th>NIM</th>

                                <th>Nama</th>

                                <th>Program Studi</th>

                                <th class="text-center">Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php if (isset($mahasiswa) && is_array($mahasiswa)): ?>

                                <?php foreach ($mahasiswa as $mhs): ?>

                                    <tr>

                                        <td>
                                            <?= htmlspecialchars($mhs['nim']) ?>
                                        </td>

                                        <td class="fw-semibold">
                                            <?= htmlspecialchars($mhs['nama']) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($mhs['prodi']) ?>
                                        </td>

                                        <td class="text-center">

                                            <a
                                                href="/SI-AKADEMIK/public/mahasiswa/detail?nim=<?= urlencode($mhs['nim']) ?>"
                                                class="btn btn-primary btn-sm">

                                                Lihat Detail

                                            </a>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- Navigation -->
        <div class="mt-4">

            <a
                href="/SI-AKADEMIK/public/dashboard"
                class="btn btn-outline-primary">

                Kembali ke Dashboard

            </a>

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