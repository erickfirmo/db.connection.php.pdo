# DBConnection PDO

Classe PHP para conexão com banco de dados MySQL usando PDO. Desenvolvido por Érick Firmo (BR) http://erickfirmo.dev


## Requerimentos
- PHP 7 ou superior


## Instalação
Para instalar com o composer:


```sh
composer require erickfirmo/dbconnection
```


## Uso Básico
```php
<?php
  // Requer o autoloader do composer
  require __DIR__ . '/vendor/autoload.php';

  // Conexão com o banco de dados MySQL usando PDO
  // Defina qual será o arquivo de configuração a partir da raíz do projeto
  new \ErickFirmo\DBConnection('config/database.php');

```

### Arquivo de configuração do banco de dados
Crie um arquivo que retorne um array com as configurações do banco de dados:
```php
<?php

  return [
    'host' => '<server>',
    'db_user' => '<user>',
    'db_password' => '<password>',
    'db_name' => '<database_name>',
    'db_driver' => 'mysql',
    'charset' => 'utf-8'
];

```

<!--## Licença
` erickfirmo/dbconnection` é uma biblioteca de código aberto licenciado sob a licença <a href="https://opensource.org/licenses/MIT" target="_blank">MIT</a>.-->


<!--<a href="https://erickfirmo.dev" target="_blank">Érick Firmo</a>-->
