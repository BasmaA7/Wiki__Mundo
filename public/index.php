<?php 
require_once('../vendor/autoload.php');
 use app\controllers\UserController;
 use app\controllers\SignupController;
 use app\Controllers\HomeController;
 use app\controllers\ErrorController;
  define('APP_URL', "http://localhost/Wiki__Mundo/");



require_once "../app/controllers/UserController.php";

 if(isset( $_GET['action'])){
 $action= $_GET['action'];


 switch($action){

  case 'home':

    $controllers = new HomeController;
    $controllers->gethome();

    break;
  case 'read':
    $controller= new UserController;
    $controller->index();
   break;
  case 'readWikis':
    $controller= new UserController;
    $controller->dashWiki();
   break;

  case 'readTags':
    $controller= new UserController;
    $controller->dashTag();
   break;
  case 'readCat':
    $controller= new UserController;
    $controller->dashCat();
   break;
  case 'create':
    $controller= new UserController;
    $controller->index();
   break;
  
   case 'addusers':
     $controllers= new SignupController();
     $controllers->index();

    break;
    case'wikis';
    $wikis=new UserController();
    $wikis->index();
    break;
    case'AddCategorie';
    $category= new UserController;
    $category->addCategories();

    break;
    case'deleteCa';
    $controllers = new UserController();
    $controllers -> suprimerCa();
    break;

  case 'logIn';
     
     $controllers= new SignupController();
     $controllers->login();
  
    break;
  
  case 'logInaction';
     
     $controllers= new UserController();
     $controllers->login();
  
    break;
    case'';
    break;
   

    case 'sup';
    $user=new UserController();
    $user->delete();
    break;

    case'updeateCat';
    $category=new UserController;
    $category->UpdateCa();
    break;

    case'AddTag';
 $tag=new UserController();
 $tag->addTag();
 break;
    case'DeleteTag';
 $tag=new UserController();
 $tag->tagdelete();
 break;


case 'wikiarchive':
  $controllers = new UserController();
  $controllers->dashWiki();
  break;

  case 'wikiaccept':
    $controllers = new UserController();
    $controllers-> accepter();
    break;
  // case 'wikirefuse':
  //   $controllers = new UserController();
  //   $controllers->refuse();
  //   break;
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