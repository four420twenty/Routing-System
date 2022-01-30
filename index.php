<?php

require_once 'libs/dev_mode.php';
require_once  'vendor/autoload.php';

use App\Services\Router;

$router = new Router();

$router->addRoute('/', 'main');
$router->addRoute('/about', 'about');

$router->Run();