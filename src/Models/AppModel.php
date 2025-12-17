<?php

namespace SPKPendakian\Models;

class AppModel {
  private string $title = "SPK Pendakian Di Jawa Tengah";
  private string $desc = "Sistem pendukung keputusan untuk menentukan pendakian gunung terbaik di Jawa Tengah menggunakan metode SAW (Simple Additive Weighting).";
  private array $members = [
    [
      "name" => "Evan Rafa Radya Alifian",
      "role" => "Web Developer",
      "profile" => "evan.jpg"
    ],
    [
      "name" => "FATHAN RUHUL ALAM",
      "role" => "Analyst",
      "profile" => "fathan.jpg"
    ],
    [
      "name" => "MUHAMMAD AMMAR ABDULHAKIM",
      "role" => "Analyst",
      "profile" => "ammar.jpg"
    ],
    [
      "name" => "IMAN WAHYUDY",
      "role" => "Analyst",
      "profile" => "wahyu.jpg"
    ],
  ];

  public function getTitle(): string {
    return $this->title;
  }

  public function getDesc(): string {
    return $this->desc;
  }

  public function getMembers(): array {
    return $this->members;
  }
}