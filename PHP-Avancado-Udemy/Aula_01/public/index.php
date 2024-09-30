<?php

use app\system\Router;

session_start();

require_once('../vendor/autoload.php');

Router::dispathc();
