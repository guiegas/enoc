<?php
use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function ($routes) {

    $routes->connect('/', ['controller' => 'Site', 'action' => 'index']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();