<?php

use Database\Database;

// O modo que vamos criar agora é para ser usado em várias partes do projeto ou várias vezes
// para facilitar na hora do desenvolvimento de um projeto!


define('MYSQL_CONFIG', [
    'host' => 'localhost',
    'database' => 'bd_stock',
    'username' => 'root',
    'password' => '',
]);

require_once('Database.php');

$db = new Database(MYSQL_CONFIG);