
<?php
if (!$dosen) {
    echo "<div class='container mt-5'>
            <div class='alert alert-danger'>Data dosen tidak ditemukan.</div>
          </div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow border-0">

                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0">EDIT DATA DOSEN</h4>
                        <small>Si Akademik - Politeknik Negeri Jember</small>
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <div class="bg-primary text-white rounded-circle d-inline-flex
                                        align-items-center justify-content-center"
                                 style="width: 75px; height: 75px;">
                                <span class="fs-2">👨‍🏫</span>
                            </div>

                            <h5 class="mt-3 mb-1">
                                <?= htmlspecialchars($dosen['nama']) ?>
                            </h5>

                            <p class="text-muted mb-0">
                                Edit informasi data dosen
                            </p>
                        </div>

                        <form action="/SI-AKADEMIK/public/dosen/update" method="POST">

                            <input type="hidden"
                                   name="id"
                                   value="<?= htmlspecialchars($dosen['id']) ?>">

                            <div class="mb-3">
                                <label for="nidn" class="form-label fw-semibold">
                                    NIDN
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="nidn"
                                       name="nidn"
                                       value="<?= htmlspecialchars($dosen['nidn']) ?>"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label fw-semibold">
                                    Nama Dosen
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="nama"
                                       name="nama"
                                       value="<?= htmlspecialchars($dosen['nama']) ?>"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="bidang_keahlian" class="form-label fw-semibold">
                                    Bidang Keahlian
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="bidang_keahlian"
                                       name="bidang_keahlian"
                                       value="<?= htmlspecialchars($dosen['bidang_keahlian']) ?>"
                                       required>
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="/SI-AKADEMIK/public/dosen"
                                   class="btn btn-outline-secondary">
                                    ← Kembali
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    💾 Simpan Perubahan
                                </button>

                            </div>

                        </form>

                    </div>

                    <div class="card-footer text-center text-muted">
                        <small>© Si Akademik - Politeknik Negeri Jember</small>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>