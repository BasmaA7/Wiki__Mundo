<?php
 use app\controllers\AdminController;
 use app\controllers\ErrorController;
 define('APP_URL', "http://localhost/Wiki__Mundo/");
 require_once(__DIR__ . '/../vendor/autoload.php');


 if(isset( $_GET['action'])){
 $action= $_GET['action'];
 switch($action){
 
  case 'read':
    $controller= new AdminController;
    $controller->index();
   break;
 }
 }
 else {
  $controller= new ErrorController;
  $controller->error();
 }
 
 
 
 
 
//  switch ($router) {
 
//      case 'home':
//          $controllers = new HomeController;
//          $controllers->gethome();
 
//          break;
//      case 'Signup':
//          $controllers = new SignupController;
//          $controllers->index();
//          break;
 
//      case 'dashboard':
//          $controllers = new DashboardController;
//          $controllers->index();
//          break;
 
//      case 'wikidelete':
//          $controllers = new DashboardController;
//          $controllers->delete();
//          break;
 
//      case 'wikiaccept':
//          $controllers = new DashboardController;
//          $controllers->accept();
//          break;
 
//      case 'addTags':
//          $controllers = new DashboardController;
//          $controllers->addTags();
 
//          break;
 
 
 
//      default:
//          $controllers = new ErrorController;
//          $controllers->error();
//          break;
 
 
//  }