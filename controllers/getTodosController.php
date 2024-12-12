<?php
if(!$_SESSION['user']) {
    redirect('/login');
}
$todos = (new \App\Todo())->getAllTodos();
view('todos',[
    'todos'=>$todos
]);
$todos = (new \App\Todo())->getAllTodos();


