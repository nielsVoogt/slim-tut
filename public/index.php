<?php

declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

// Settings
$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

// Logger
$logger = require __DIR__ . '/../app/logger.php';
$logger($container);

// Set the container
AppFactory::setContainer($container);

$app = AppFactory::create();

// Views
$views = require __DIR__ . '/../app/views.php';
$views($app);

// Middleware
$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

// Routes
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

// Run app
$app->run();