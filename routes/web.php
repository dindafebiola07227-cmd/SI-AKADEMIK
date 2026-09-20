<?php

$routes = [

    'GET' => [

        '/' => ['MahasiswaController', 'index'],

        '/login' => ['AuthController', 'loginForm'],

        '/dashboard' => ['DashboardController', 'index'],

        '/mahasiswa' => ['MahasiswaController', 'index'],

        '/mahasiswa/detail' => ['MahasiswaController', 'detail'],

        // Route Dosen
        '/dosen' => ['DosenController', 'index'],

        '/dosen/create' => ['DosenController', 'create'],

        '/dosen/edit' => ['DosenController', 'edit'],

        '/dosen/delete' => ['DosenController', 'delete'],

        '/logout' => ['AuthController', 'logout'],

    ],

    'POST' => [

        '/login/process' => ['AuthController', 'login'],

        // Route proses CRUD Dosen
        '/dosen/store' => ['DosenController', 'store'],

        '/dosen/update' => ['DosenController', 'update'],

    ],

];