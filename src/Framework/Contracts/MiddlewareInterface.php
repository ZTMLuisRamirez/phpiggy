<?php

declare(strict_types=1);

namespace Framework\Contracts;

interface MiddlewareInterface
{
  public function process(callable $next);
}
