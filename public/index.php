<?php 
require_once('../vendor/autoload.php');
 use app\controllers\AdminController;
 use app\controllers\SignupController;
 use app\controllers\ErrorController;
  define('APP_URL', "http://localhost/Wiki__Mundo/");



require_once "../app/controllers/AdminController.php";

 if(isset( $_GET['action'])){
 $action= $_GET['action'];


 switch($action){

  case 'read':
    $controller= new AdminController;
    $controller->index();
   break;
  case 'create':
    $controller= new AdminController;
    $controller->index();
   break;
  //  case 'wikidelete':
  //   $controllers = new AdminController;
  //   $controllers->accepter();
  //   break;
   case 'addusers':
     $controllers= new SignupController();
     $controllers->index();

    break;
    case'wikis';
    $wikis=new AdminController();
    $wikis->index();
    break;
    case'categorie';
    $category = new AdminController();
    $category = index();
    break;
  case 'logIn':
     
     $controllers= new AdminController();
     $controllers->login();
    break;
  case 'wikiaccept':
    $controllers = new AdminController;
    $controllers->refuser();
    break;
 }
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