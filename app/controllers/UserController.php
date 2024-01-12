<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;
use app \helper\Validator;


class UserController {
  public function index (){
    $users= new User;
   $users= $users-> getallusers();
 
  //  $categories = new User;
  //   $categories=$categories->selectcategories();
  $wikis = new User;
  $wikis = $wikis->getallwikis();

    include "../../views/Dashbords/dachboard.php";
  }
  
  public function accepter()
  {
      $id = $_POST['id'];
      $wikis = new User;
      $wikis = $wikis->acceptwiki($id);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }


  public function refuser()
  {
      $id = $_POST['id'];
      $wikis = new User;
      $wikis->refuser($id);
      header("Location:index.php?route=dashboard ");

  }


 
public function createUser (){
  $name =Validator::validation($_POST['name']);
  $email =  Validator::validation($_POST['email']);
  $password =Validator::validation($_POST['password']);

  $password = password_hash($password, PASSWORD_BCRYPT);
  $user = new User();
  $result = $user->addusers($user, $email,$password, $role);
}
}






