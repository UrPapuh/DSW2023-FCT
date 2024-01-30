<?php
namespace DSW\FCT\Controllers;

class defaultController extends controller
{
  public function home() {
    $router = $this->router;
    echo $this->blade->make('home', compact('router'))->render();
  }
}