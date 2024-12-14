<?php
use App\Todo;
use App\Router;

$router = new Router();
$todo = new Todo();

$router->get('/api/todos',function () use ($todo){
    apiResponse($todo->getAllTodos(2));

});

$router->get('/api/todos/{id}',function () use ($todoId) use ($todo){
apiResponse($todo->getTodo($todoId));

});