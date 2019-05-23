<?php
namespace TopItemsTutorial\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TopItemsRouteServiceProvider extends RouteServiceProvider {
    public function map(Router $router) {
        $router->get('topitems', 'TopItemsTutorial\Controllers\ContentController@showTopItems');
    }
}