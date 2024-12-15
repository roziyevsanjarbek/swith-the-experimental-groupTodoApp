<?php
use App\Router;

$router = new Router();

if ($router->isApiCall()) {
    require 'routes/api.php';
    exit();
} else {
    require 'routes/web.php';
    exit();
}