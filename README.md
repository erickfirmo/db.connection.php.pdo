# DBConnection PDO

PHP class for connection to MySQL database using PDO. Developed by Érick Firmo (BR) http://erickfirmo.dev


## Requirements
- PHP >= 7


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

  // Define the configuration file from the project root
  new \ErickFirmo\DBConnection('../config/database.php');
  
  // Connection to MySQL database using PDO
  $connection = (new \Connection())->getPDOConnection();

```

### Database Settings
Return an array with the database settings:
```php
<?php

  return [

    'host' => 'localhost',
    'driver' => 'mysql',
    'charset' => 'utf-8',
    'database' => '<database_name>',
    'user' => '<database_user>',
    'password' => '<database_password>'
    
  ];

```
