<?php

    session_start();
    require_once('models/DB.php');
    require_once('models/Users.php');

    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'Users';
    $method = isset($_GET['method']) ? $_GET['method'] : 'index';

    require_once("controllers/{$controller}Controller.php");
    $controller = "{$controller}Controller";

    call_user_func([new $controller(), $method]);



?>