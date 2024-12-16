<?php

use App\Router;
use App\Todo;

$router = new Router();
$todo = new Todo();

$router->get('/api/todos',function () use ($todo) {
    header('Content-Type: application/json');
    apiResponse($todo->getAllTodos(21));
});

$router->get('/api/todos/{id}',function ($todoId) use ($todo) {
    header('Content-Type: application/json');
    apiResponse($todo->getAllTodos($todoId));

});

$router->post('/api/todos/{id}',function () use ($todo) {
    $todo->store($_POST['title'],$_POST['dueDate'],2);
    apiResponse([
        "ok" => true,
        'message'=>'Todo created successfully'
    ]);

});

$router->put('/api/todos/{id}',function ($todoId) use ($todo) {
    $todo->update($todoId,$_POST['title'],$_POST['status'],$_POST['dueDate']);
    apiResponse([
        'ok'=>true,
        'message'=>'Todo updated successfully'
    ]);

});

$router->delete('/api/todos/{id}',function ($todoId) use ($todo) {
    $todo->destory($todoId);
    apiResponse([
        'ok'=>true,
        'message'=>'Todo deleted successfully'
    ]);

});

