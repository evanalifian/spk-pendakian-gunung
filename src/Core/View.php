<?php

namespace SPKPendakian\Core;

class View {
  static public function render(string $page, array $data = []): void {
    $data["copyright"] = date("Y");

    require_once __DIR__. "/../Views/layouts/header.php";
    require_once __DIR__. "/../Views/$page.php";
    require_once __DIR__. "/../Views/layouts/footer.php";
  }
}