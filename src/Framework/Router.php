<?php

declare(strict_types=1);

namespace Framework;

class Router
{
  private array $routes = [];
  private array $middlewares = [];
  private array $errorHandler;

  public function add(string $method, string $path, array $controller)
  {
    $path = $this->normalizePath($path);

    $regexPath = preg_replace('#{[^/]+}#', '([^/]+)', $path);

    $this->routes[] = [
      'path' => $path,
      'method' => strtoupper($method),
      'controller' => $controller,
      'middlewares' => [],
      'regexPath' => $regexPath
    ];
  }

  private function normalizePath(string $path): string
  {
    $path = trim($path, '/');
    $path = "/{$path}/";
    $path = preg_replace('#[/]{2,}#', '/', $path);

    return $path;
  }

  public function dispatch(string $path, string $method, Container $container = null)
  {
    $path = $this->normalizePath($path);
    $method = strtoupper($_POST['_METHOD'] ?? $method);

    foreach ($this->routes as $route) {
      if (
        !preg_match("#^{$route['regexPath']}$#", $path, $paramValues) ||
        $route['method'] !== $method
      ) {
        continue;
      }

      array_shift($paramValues);

      preg_match_all('#{([^/]+)}#', $route['path'], $paramKeys);

      $paramKeys = $paramKeys[1];

      $params = array_combine($paramKeys, $paramValues);

      [$class, $function] = $route['controller'];

      $controllerInstance = $container ?
        $container->resolve($class) :
        new $class;

      $action = fn () => $controllerInstance->{$function}($params);

      $allMiddleware = [...$route['middlewares'], ...$this->middlewares];

      foreach ($allMiddleware as $middleware) {
        $middlewareInstance = $container ?
          $container->resolve($middleware) :
          new $middleware;
        $action = fn () => $middlewareInstance->process($action);
      }

      $action();

      return;
    }

    $this->dispatchNotFound($container);
  }

  public function addMiddleware(string $middleware)
  {
    $this->middlewares[] = $middleware;
  }

  public function addRouteMiddleware(string $middleware)
  {
    $lastRouteKey = array_key_last($this->routes);
    $this->routes[$lastRouteKey]['middlewares'][] = $middleware;
  }

  public function setErrorHandler(array $controller)
  {
    $this->errorHandler = $controller;
  }

  public function dispatchNotFound(?Container $container)
  {
    [$class, $function] = $this->errorHandler;

    $controllerInstance = $container ? $container->resolve($class) : new $class;

    $action = fn () => $controllerInstance->$function();

    foreach ($this->middlewares as $middleware) {
      $middlewareInstance = $container ? $container->resolve($middleware) : new $middleware;
      $action = fn () => $middlewareInstance->process($action);
    }

    $action();
  }
}
