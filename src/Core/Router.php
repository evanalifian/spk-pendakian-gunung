<?php

namespace SPKPendakian\Core;

class Router {
  private array $routes = [];
  private string $path = "/";
  private string $method;

  private function addRoute(string $method, string $path, string $controller, string $function): void {
    $this->routes[] = [
      "method" => $method,
      "path" => $path,
      "controller" => $controller,
      "function" => $function
    ];
  }

  public function get(string $path, string $controller, string $function) {
    $this->addRoute("GET", $path, $controller, $function);
  }

  public function post(string $path, string $controller, string $function) {
    $this->addRoute("POST", $path, $controller, $function);
  }

  public function run(): void {
    if (isset($_SERVER['PATH_INFO'])) {
      $this->path = $_SERVER['PATH_INFO'];
    }

    $this->method = $_SERVER['REQUEST_METHOD'];

    foreach ($this->routes as $route) {
      if ($route["path"] === $this->path && $route["method"] === $this->method) {
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