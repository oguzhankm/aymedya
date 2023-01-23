<?php
const BASE = __DIR__;

use Kodlazim\Core\{App, Route};

require BASE . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(BASE);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];





$app = new \Kodlazim\Core\App(dirname(__DIR__), $config);

$app->run();

//Route::get('users/:id', 'User@detail')->name('user')
