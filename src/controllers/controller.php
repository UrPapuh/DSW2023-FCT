<?php

namespace DSW\FCT\Controllers;

class controller {
  protected $router;
  protected $blade;

  public function __construct($router, $blade) {
    $this->router = $router;
    $this->blade = $blade;
  }
}