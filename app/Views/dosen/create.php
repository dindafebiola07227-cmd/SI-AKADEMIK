
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen - SI Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Tambah Data Dosen</h2>

    <form method="POST" action="/SI-AKADEMIK/public/dosen/store">

        <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" name="nidn" id="nidn"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Dosen</label>
            <input type="text" name="nama" id="nama"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="bidang_keahlian" class="form-label">
                Bidang Keahlian
            </label>
            <input type="text" name="bidang_keahlian"
                   id="bidang_keahlian"
                   class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="/SI-AKADEMIK/public/dosen"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>