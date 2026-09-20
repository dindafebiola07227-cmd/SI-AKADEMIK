
<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../Models/Dosen.php';

class DosenController
{
    // Menampilkan daftar dosen
    public function index()
    {
        global $pdo;

        $model = new Dosen($pdo);

        $dosen = $model->getAll();

        require_once __DIR__ . '/../Views/dosen/index.php';
    }

    // Menampilkan form tambah dosen
    public function create()
    {
        require_once __DIR__ . '/../Views/dosen/create.php';
    }

    // Menyimpan data dosen baru
    public function store()
    {
        global $pdo;

        $model = new Dosen($pdo);

        $model->create([
            'nidn' => $_POST['nidn'],
            'nama' => $_POST['nama'],
            'bidang_keahlian' => $_POST['bidang_keahlian']
        ]);

        header('Location: /SI-AKADEMIK/public/dosen');
        exit;
    }

    // Menampilkan form edit dosen
    public function edit()
    {
        global $pdo;

        $model = new Dosen($pdo);

        $id = $_GET['id'];

        $dosen = $model->getById($id);

        require_once __DIR__ . '/../Views/dosen/edit.php';
    }

    // Memperbarui data dosen
    public function update()
    {
        global $pdo;

        $model = new Dosen($pdo);

        $id = $_POST['id'];

        $model->update($id, [
            'nidn' => $_POST['nidn'],
            'nama' => $_POST['nama'],
            'bidang_keahlian' => $_POST['bidang_keahlian']
        ]);

        header('Location: /SI-AKADEMIK/public/dosen');
        exit;
    }

    // Menghapus data dosen
    public function delete()
    {
        global $pdo;

        $model = new Dosen($pdo);

        $id = $_GET['id'];

        $model->delete($id);

        header('Location: /SI-AKADEMIK/public/dosen');
        exit;
    }
}