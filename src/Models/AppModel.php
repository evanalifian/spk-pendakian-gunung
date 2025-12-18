<?php

namespace SPKPendakian\Models;

class AppModel {
  private static string $title = "SPK Pendakian Di Jawa Tengah";
  private static string $desc = "Sistem pendukung keputusan untuk menentukan pendakian gunung terbaik di Jawa Tengah menggunakan metode SAW (Simple Additive Weighting).";
  private static array $members = [
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

  public static function getTitle(): string {
    return self::$title;
  }

  public static function getDesc(): string {
    return self::$desc;
  }

  public static function getMembers(): array {
    return self::$members;
  }
}