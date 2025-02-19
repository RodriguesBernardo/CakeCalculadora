<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Calculadora', 'action' => 'index']);
        $builder->connect('/calculadora', ['controller' => 'Calculadora', 'action' => 'index']);
        $builder->connect('/pages/*', 'Pages::display');
        $builder->fallbacks();
    });
};
