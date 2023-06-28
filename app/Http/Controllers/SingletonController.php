<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Singleton\Config\Config;
use App\Models\Singleton\Database\Database;
use Illuminate\Http\Request;

class SingletonController extends Controller
{
    public function getConnection(){
        $database = Database::getInstance();
        $connection = $database->getConnection();

        print_r($connection);
    }

    public function getConfig(){
        $config = Config::getInstance();
        $data = $config->getConfigData();

        print_r($config);
    }
}
