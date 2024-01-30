<?php
// List of routes
$router->map('GET', '/', 'defaultController#home', 'home');

// -> Login
$router->map('GET', '/login', 'loginController#login', 'login');
$router->map('POST', '/login', 'loginController#validate', 'validate');
$router->map('GET', '/logout', 'loginController#logout', 'logout');

if (isset($_SESSION['name'])) {
  // -> Company
  $router->map('GET', '/companies', 'companyController#list', 'company_list');

  $router->map('GET', '/companies/[i:id]/delete', 'companyController#delete', 'company_delete');

  $router->map('GET', '/companies/create', 'companyController#create', 'company_create');
  $router->map('POST', '/companies', 'companyController#post', 'company_post');

  $router->map('GET', '/companies/[i:id]', 'companyController#edit', 'company_edit');
  $router->map('POST', '/companies/[i:id]', 'companyController#update', 'company_update');

  if ($_SESSION['profesor']) {
    // -> Choice
    $router->map('GET', '/choices', 'choiceController#list', 'choice_list');
  }
}