<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\{
  HomeController,
  AboutController,
  AuthController
};

function registerRoutes(App $app)
{
  $app->get('/', [HomeController::class, 'home']);
  $app->get('/about', [AboutController::class, 'about']);
  $app->get('/register', [AuthController::class, 'registerView']);
  $app->post('/register', [AuthController::class, 'register']);
}
