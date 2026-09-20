
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Politeknik Negeri Jember</h1>

    <div class="mb-3">
        <a href="/SI-AKADEMIK/public/mahasiswa" class="btn btn-primary">
            Data Mahasiswa
        </a>

        <a href="/SI-AKADEMIK/public/dosen" class="btn btn-outline-primary">
            Data Dosen
        </a>
    </div>

    <div class="card shadow-sm">

        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Mahasiswa</h5>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="35%">NIM</th>
                    <td>
                        <?= htmlspecialchars($mahasiswa['nim'] ?? '-') ?>
                    </td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>
                        <?= htmlspecialchars($mahasiswa['nama'] ?? '-') ?>
                    </td>
                </tr>

                <tr>
                    <th>Program Studi</th>
                    <td>
                        <?= htmlspecialchars($mahasiswa['prodi'] ?? '-') ?>
                    </td>
                </tr>

                <tr>
                    <th>Dosen Pembimbing</th>
                    <td>
                        <?= htmlspecialchars($mahasiswa['nama_dosen'] ?? 'Belum ditentukan') ?>
                    </td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        <?= htmlspecialchars($mahasiswa['status'] ?? '-') ?>
                    </td>
                </tr>

            </table>

            <a href="/SI-AKADEMIK/public/mahasiswa"
               class="btn btn-secondary w-100">
                Kembali
            </a>

        </div>
    </div>

</div>

</body>
</html>