<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middleware\{
  TemplateDataMiddleware,
  ValidationExceptionMiddleware,
  SessionMiddleware,
  FlashMiddleware,
  CsrfTokenMiddleware,
  CsrfGuardMiddleware
};

function registerMiddleware(App $app)
{
  $app->addMiddleware(CsrfGuardMiddleware::class);
  $app->addMiddleware(CsrfTokenMiddleware::class);
  $app->addMiddleware(TemplateDataMiddleware::class);
  $app->addMiddleware(ValidationExceptionMiddleware::class);
  $app->addMiddleware(FlashMiddleware::class);
  $app->addMiddleware(SessionMiddleware::class);
}
