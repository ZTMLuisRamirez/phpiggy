<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middleware\{
  TemplateDataMiddleware,
  ValidationExceptionMiddleware,
  SessionMiddleware,
  FlashMiddleware
};

function registerMiddleware(App $app)
{
  $app->addMiddleware(TemplateDataMiddleware::class);
  $app->addMiddleware(ValidationExceptionMiddleware::class);
  $app->addMiddleware(FlashMiddleware::class);
  $app->addMiddleware(SessionMiddleware::class);
}
