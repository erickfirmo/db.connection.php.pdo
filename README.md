# DBConnection PDO

Classe PHP para conexão com banco de dados MySQL usando PDO. Desenvolvido por Érick Firmo (BR) http://erickfirmo.dev


## Requirements
- PHP 7 >=


## Install
To install with composer:


```sh
composer require erickfirmo/dbconnection
```


## Usage
```php
<?php
  // Require composer autoloader
  require __DIR__ . '/vendor/autoload.php';

  // Connection to MySQL database using DOP
  // Define the configuration file from the project root
  new \ErickFirmo\DBConnection('../config/database.php');

```

### Database Settings
Return an array with the database settings:
```php
<?php

  return [
    'host' => 'localhost',
    'db_user' => '<user>',
    'db_password' => '<password>',
    'db_name' => '<database_name>',
    'db_driver' => 'mysql',
    'charset' => 'utf-8'
];

```
