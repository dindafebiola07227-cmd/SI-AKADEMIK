
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Dosen - Si Akademik</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary shadow-sm">

        <div class="container">

            <span class="navbar-brand fw-bold fs-6">
                SI AKADEMIK
            </span>

            <a
                href="/SI-AKADEMIK/public/logout"
                class="btn btn-light btn-sm"
            >
                Logout
            </a>

        </div>

    </nav>


    <!-- Konten -->
    <div class="container py-4">

        <!-- Header -->
        <div class="d-flex justify-content-between
                    align-items-center mb-3">

            <div>

                <h2 class="text-primary fw-bold mb-1">
                    👨‍🏫 Data Dosen
                </h2>

                <p class="text-secondary small mb-0">
                    Informasi dosen Politeknik Negeri Jember
                </p>

            </div>

            <a
                href="/SI-AKADEMIK/public/dashboard"
                class="btn btn-outline-primary btn-sm"
            >
                Kembali
            </a>

        </div>


        <!-- Tombol Tambah -->
        <div class="mb-3">

            <a
                href="/SI-AKADEMIK/public/dosen/create"
                class="btn btn-primary btn-sm"
            >
                + Tambah Dosen
            </a>

        </div>


        <!-- Tabel -->
        <div class="card border-0 shadow-sm">

            <div class="card-body p-3">

                <div class="table-responsive">

                    <table class="table table-sm
                                  table-hover align-middle mb-0">

                        <thead class="table-primary">

                            <tr>

                                <th>No</th>

                                <th>NIDN</th>

                                <th>Nama Dosen</th>

                                <th>Bidang Keahlian</th>

                                <th>Aksi</th>

                            </tr>

                        </thead>


                        <tbody>

                            <?php foreach ($dosen as $index => $item): ?>

                                <tr>

                                    <td>
                                        <?= $index + 1 ?>
                                    </td>

                                    <td>

                                        <span class="badge bg-primary">

                                            <?= htmlspecialchars($item['nidn']) ?>

                                        </span>

                                    </td>

                                    <td class="fw-semibold">

                                        <?= htmlspecialchars($item['nama']) ?>

                                    </td>

                                    <td>

                                        <?= htmlspecialchars($item['bidang_keahlian']) ?>

                                    </td>

                                    <td>

                                        <a
                                            href="/SI-AKADEMIK/public/dosen/edit?id=<?= $item['id'] ?>"
                                            class="btn btn-warning btn-sm"
                                        >
                                            Edit
                                        </a>

                                        <a
                                            href="/SI-AKADEMIK/public/dosen/delete?id=<?= $item['id'] ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"
                                        >
                                            Hapus
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- Footer -->
        <div class="text-center mt-4">

            <span class="badge bg-primary px-3 py-2">

                🎓Politeknik Negeri Jember

            </span>

        </div>

    </div>

</body>

</html>