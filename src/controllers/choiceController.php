<?php
namespace DSW\FCT\Controllers;

require_once('../src/connection.php');

use DSW\FCT\models\Choice;

class choiceController extends controller
{
  public function list() {
    $router = $this->router;
    $choices = Choice::all();
    echo $this->blade->make('choice.list', compact('router', 'choices'))->render(); 
  }
}