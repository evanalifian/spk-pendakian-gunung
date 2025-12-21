<?php

namespace SPKPendakian\Middlewares;

interface Middleware {
  public function before(): void;
}