<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    /*
    echo "<h1>Abhijeet Singh first symfony app</h1>";
    echo "<h2>Wait please, we are currently building the app!</h2>";
    echo "<img src='under_construction.gif'/>";*/
};
