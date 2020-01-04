<?php


define('ROOT_PATH', dirname(__DIR__));

if (!file_exists($file = ROOT_PATH . '/vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run this script.');
}

require_once $file;

$app = \DI\Bridge\Slim\Bridge::create();
$app->addRoutingMiddleware();

\App\Routing\CatsApi::register($app);

$app->add(\App\Middlewares\Format::class);

$app->run();
