<?php

declare(strict_types=1);

namespace App\Routing;

use Slim\App;
use Slim\Routing\RouteCollectorProxy;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class CatsApi
{
    /**
     * @param App $app
     */
    public static function register(App $app): void
    {
        $app->group('/api/v1', function (RouteCollectorProxy $group) {
            $group->get('/cats[/]', \App\Controllers\GetCats::class);
        });
    }
}
