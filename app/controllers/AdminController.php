<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';

 use app\models\Admin;

class AdminController {
  public function index (){
    $users= new Admin;
   $users= $users-> getallusers();
    include "../../views/Dashbords/dachboard.php";
  }
   
}
$adminController = new AdminController();
$adminController->index();