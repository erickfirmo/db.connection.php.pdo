<?php

namespace ErickFirmo;

class DBConnection
{
    protected $config;

    public function __construct($configFile)
    {
        $this->setConfig($configFile);
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
    
    public function setConfig($configFile)
    {
        $this->config = include $configFile;
    }
}
