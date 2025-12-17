<?php

namespace SPKPendakian\Controllers;

use SPKPendakian\Core\View;
use SPKPendakian\Models\AppModel;

class HomeController {
  public function index(): void {
    $appInfo = new AppModel();

    View::render("index", [
      "title" => $appInfo->getTitle(),
      "desc" => $appInfo->getDesc(),
      "members" => $appInfo->getMembers()
    ]);
  }
}