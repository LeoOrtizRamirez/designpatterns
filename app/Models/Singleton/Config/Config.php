<?php

namespace App\Models\Singleton\Config;

class Config
{
    private static $instance;
    private $configData = array(
        'clave_secreta' => 'mi_clave_secreta',
        'url_base' => 'https://www.ejemplo.com',
        'version' => '1.0'
    );

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConfigData()
    {
        return $this->configData;
    }
}
