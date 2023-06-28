<?php

namespace App\Models\Singleton\Database;

class Database 
{
    private static $instance;
    private $connection;

    private function __construct() 
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'laravel');
    }

    public static function getInstance() 
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}