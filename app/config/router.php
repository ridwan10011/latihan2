<?php

$router = $di->getRouter();

// Define your routes here

$router->handle($_SERVER['REQUEST_URI']);
// echo $router->getControllerName();
// echo $router->getActionName();