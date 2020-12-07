<?php

declare(strict_types=1);

use Slim\App;
// use App\Application\Middleware\ExampleBeforeMiddleware;
// use App\Application\Middleware\ExampleAfterMiddleware;

return function(App $app) {
  $settings = $app->getContainer()->get('settings');
  
  $app->addErrorMiddleware(
    $settings['displayErrorDetails'],
    $settings['logErrorDetails'],
    $settings['logErrors']
  );

  // $app->add(ExampleBeforeMiddleware::class);
  // $app->add(ExampleAfterMiddleware::class);
};

