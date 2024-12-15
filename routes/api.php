<?php

use App\Router;
use App\Todo;

$router = new Router();
$todo = new Todo();

$router->get('/api/todos',function () use ($todo) {
    header('Content-Type: application/json');
    apiResponse($todo->getAllTodos(2));
});

$router->get('/api/todos/{id}',function ($todoId) use ($todo) {
    header('Content-Type: application/json');
    apiResponse($todo->getAllTodos($todoId));

});

