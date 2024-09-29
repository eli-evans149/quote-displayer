<?php

include_once 'E:\personal-projects-2024\quote-displayer\AppBundle\Controller\QuoteGeneratorController.php';
include_once 'E:\personal-projects-2024\quote-displayer\Routes\routes.php';

$routes = $routes;

$uri = '/';

foreach ($routes as $route => $config) {
    if ($route === $uri) {
        $controller = new $config['controller']();
        $action = $config['action'];
        echo $controller->$action();
    }
}

?>