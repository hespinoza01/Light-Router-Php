# Light Router Php

Ligero y sencillo enrutador para php, el enrutador soporta los métodos: **GET**, **POST**, **PUT** y **DELETE**.

Ejemplo de uso:

```php
require 'Router.php';

// creando instancia del enrutador
$router = new Router();


// definiendo ruta tipo GET junto con su contralador
$router->get('/ruta/disponible', function(){
    echo 'Hola mundo';
});


// definiendo ruta tipo POST junto con su controlador
$router->post('/post/route', function(){
     echo 'Hola de nuevo';
});


// definiendo ruta tipo PUT junto con su controlador
$router->put('/put/route', function(){
     echo 'Hola de nuevo';
});


// definiendo ruta tipo DELETE junto con su controlador
$router->delete('/delete/route', function(){
     echo 'Hola de nuevo';
});
```