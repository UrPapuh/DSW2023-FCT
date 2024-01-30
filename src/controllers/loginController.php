<?php
namespace DSW\FCT\Controllers;

require_once('../src/connection.php');

use DSW\FCT\models\User;

class loginController extends controller
{
  public function login() {
    $router = $this->router;
    echo $this->blade->make('login.login', compact('router'))->render(); 
  }

  public function validate() {
    $user = User::where([
      ['name', $_POST['name']],
      ['password', $_POST['password']]
    ])->first();
    if ($user) {
      $_SESSION['id'] = $user->id;
      $_SESSION['name'] = $user->name;
      $_SESSION['profesor'] = $user->profesor;
      header("Location: {$this->router->generate('home')}");  
    } else {
      header("Location: {$this->router->generate('login')}");
    }
  }

  public function logout() {
    session_destroy();
    header("Location: {$this->router->generate('home')}");  
  }
}