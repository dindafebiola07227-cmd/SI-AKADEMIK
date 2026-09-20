<?php

// Koneksi database
require_once __DIR__ . '/../config/config.php';

// Routing
require_once __DIR__ . '/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$base = '/SI-AKADEMIK/public';

if (str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base)) ?: '/';
}

$method = $_SERVER['REQUEST_METHOD'];

if (isset($routes[$method][$uri])) {

    [$controllerName, $action] = $routes[$method][$uri];

    // Load Controller
    require_once __DIR__ . '/../app/Controllers/' . $controllerName . '.php';

    // Middleware untuk halaman yang membutuhkan login
   if (
    in_array($uri, [
        '/dashboard',
        '/mahasiswa',
        '/dosen',
        '/dosen/create',
        '/dosen/edit',
        '/dosen/delete',
        '/dosen/store',
        '/dosen/update'
    ])
) {

        require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

        $middleware = new AuthMiddleware();
        $middleware->handle();
    }

    // Buat object Controller
    $controller = new $controllerName();

    // Jalankan method Controller
    $controller->$action();

} else {

    http_response_code(404);

    echo "404 - Halaman tidak ditemukan";
}