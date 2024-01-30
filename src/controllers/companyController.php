<?php
namespace DSW\FCT\Controllers;

require_once('../src/connection.php');

use DSW\FCT\models\Company;
use DSW\FCT\models\Choice;

class companyController extends controller
{
  public function list() {
    $router = $this->router;
    $companies = Company::all();
    echo $this->blade->make('company.list', compact('router', 'companies'))->render(); 
  }

  public function delete($params) {
    $id = $params['id'];
    $company = Company::find($id);
    $choices = Choice::where([
      ['company_id', $company->id]
    ]);
    foreach ($choices as $choice) {
      $choices->delete();
    }
    $company->delete();
    header("Location: {$this->router->generate('company_list')}");
  }

  public function create() {
    $router = $this->router;
    echo $this->blade->make('company.create', compact('router'))->render();
  }

  public function post() {
    $company = new Company();
    $company->name = $_POST['inputName'];
    $company->url = $_POST['inputURL'];
    $company->mode = $_POST['inputMode'];
    $company->description = $_POST['inputDescription'];
    $company->save();
    header("Location: {$this->router->generate('company_list')}");
  }

  public function edit($params) {
    $id = $params['id'];
    $company = Company::find($id);

    $router = $this->router;
    echo $this->blade->make('company.edit', compact('router', 'company'))->render();
  }

  public function update($params) {
    $company = Company::find($params['id']);
    $company->name = $_POST['inputName'];
    $company->url = $_POST['inputURL'];
    $company->mode = $_POST['inputMode'];
    $company->description = $_POST['inputDescription'];
    $company->save();
    header("Location: {$this->router->generate('company_list')}");
  }
}