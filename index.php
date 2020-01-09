<?php

require 'Router.php';

$router = new Router();

$router->get('/', function(){
    echo 'GET';
});

$router->post('/', function(){
    echo 'POST';
});

$router->put('/', function(){
    echo 'PUT';
});

$router->delete('/', function(){
    echo 'DELETE';
});
