<?php

namespace SPKPendakian\Controllers;

use SPKPendakian\Core\View;
use SPKPendakian\Models\AppModel;
use SPKPendakian\Models\HomeModels;

class HomeController {
  public function index(): void {
    session_start();
    if (isset($_SESSION["auth"])) {
      View::render("home/ranking", [
        "title" => "Rangking Gunung Terbaik"
      ]);
    } else {
      View::render("home/landing", [
        "title" => AppModel::getTitle(),
        "desc" => AppModel::getDesc(),
        "members" => AppModel::getMembers()
      ]);
    }
    
  }

  public function docs(): void {
    View::render("docs/index", [
      "title" => "Dokumentasi Studi Kasus",
      "desc" => "Dokumentasi studi kasus dari SPK pendakian gunung di Jawa Tengah.",
      "criterias" => HomeModels::getCriteria(),
      "alternative" => HomeModels::getAlternative()
    ]);
  }

  public function getJournal(): void {
    require_once __DIR__ . "/../../public/journal/reference_journal.pdf";
  }
}