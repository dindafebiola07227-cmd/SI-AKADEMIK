<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Informasi Akademik</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container">

    <div class="card shadow-sm border-0 rounded-4
                p-4 mx-auto mt-5"
         style="max-width: 380px;">

        <h2 class="text-center text-primary fw-bold mb-2">
           🎓 Si Akademik
        </h2>

        <p class="text-center text-secondary small mb-4">
            Sistem Informasi Akademik
        </p>


        <?php if (isset($error)): ?>

            <div class="alert alert-danger text-center py-2 small">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>


        <form
            action="/SI-AKADEMIK/public/login/process"
            method="POST"
        >

            <label class="form-label fw-bold">
                Username
            </label>

            <input
                type="text"
                name="username"
                class="form-control mb-3"
                placeholder="Masukkan username"
                required
            >


            <label class="form-label fw-bold">
                Password
            </label>

            <div class="input-group mb-4">

                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required
                >

                <button
                    type="button"
                    class="btn btn-outline-secondary"
                    id="togglePassword"
                >
                    <i class="bi bi-eye"></i>
                </button>

            </div>


            <button
                type="submit"
                class="btn btn-primary w-100 fw-bold"
            >
                Masuk ke Sistem
            </button>

        </form>


        <div class="text-center mt-4">

            <span class="badge bg-primary px-3 py-2">
               🎓 Politeknik Negeri Jember
            </span>

        </div>

    </div>

</div>


<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function () {

        if (password.type === 'password') {

            password.type = 'text';

            this.innerHTML = '<i class="bi bi-eye-slash"></i>';

        } else {

            password.type = 'password';

            this.innerHTML = '<i class="bi bi-eye"></i>';

        }

    });
</script>

</body>
</html>