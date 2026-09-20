<?php

class AuthController
{
    public function loginForm()
    {
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function login()
    {
        session_start();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === '12345') {

            $_SESSION['login'] = true;
            $_SESSION['username'] = 'admin';

            header('Location: /SI-AKADEMIK/public/dashboard');
            exit;

        } else {
    $error = "Username atau password salah.";
    require_once __DIR__ . '/../Views/auth/login.php';
}
    }

    public function logout()
    {
        session_start();

        session_unset();
        session_destroy();

        header('Location: /SI-AKADEMIK/public/login');
        exit;
    }
}