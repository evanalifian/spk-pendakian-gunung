<?php

namespace SPKPendakian\Core;

class Router {
  private static array $routes = [];
  private static string $path = "/";
  private static string $method;

  private static function addRoute(string $method, string $path, string $controller, string $function): void {
    self::$routes[] = [
      "method" => $method,
      "path" => $path,
      "controller" => $controller,
      "function" => $function
    ];
  }

  public static function get(string $path, string $controller, string $function) {
    self::addRoute("GET", $path, $controller, $function);
  }

  public static function post(string $path, string $controller, string $function) {
    self::addRoute("POST", $path, $controller, $function);
  }

  public static function run(): void {
    if (isset($_SERVER['PATH_INFO'])) {
      self::$path = $_SERVER['PATH_INFO'];
    }

    self::$method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      if ($route["path"] === self::$path && $route["method"] === self::$method) {
        $controller = new $route["controller"];
        $function = $route["function"];
        $controller->$function();
        return;
      }
    }

    http_response_code(404);
    View::render("404");
  }
}