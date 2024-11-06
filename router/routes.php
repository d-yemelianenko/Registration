<?php

use App\Services\Router;

Router::page('/registr', 'registr');
Router::page('/', 'home');
Router::page('/login', 'login');


Router::enable();
?>