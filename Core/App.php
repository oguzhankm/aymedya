<?php

namespace Kodlazim\Core;

use Kodlazim\App\Models\Blog;
use Kodlazim\App\Models\User;

class App
{
    public Database $db;
    public static string $ROOT_DIR;
    public static App $app;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->db = new Database($config['db']);
//        $this->loadDotenv();
    }

    public function run()
    {
        // Database Connect
//        $model = new User();
//        $model->find(1,['email','password']);
//        die;

        Route::dispatch();
    }

//    public function loadDotenv()
//    {
//        $dotenv = \Dotenv\Dotenv::createUnsafeImmutable(BASE);
//        $dotenv->load();
//
//    }
}