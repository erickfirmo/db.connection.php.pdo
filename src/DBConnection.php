<?php

namespace ErickFirmo;
use PDO;

class DBConnection
{
    protected $config;

    public function __construct()
    {
        $this->setConfig();
        return $this->getPDOConnection();
    }

    public function getConfig($config)
    {
        return $this->config[$config];
    }

    public function getPDOConnection()
    {
        $dsn = 'mysql:host='.$this->getConfig('host').';dbname='.$this->getConfig('db_name');
        try {
            $pdo = new PDO($dsn, $this->getConfig('db_user'), $this->getConfig('db_password'));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $ex) {
            print 'Erro: '.$ex->getMessage();
        }
    }
    
    public function setConfig()
    {
        if(isset($_SERVER['REQUEST_URI']))
            $this->config = include '../config/database.php';
        else
            $this->config = include 'config/database.php';
    }
}
