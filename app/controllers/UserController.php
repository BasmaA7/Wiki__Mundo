<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;

use app\helper\Validator;


class UserController {
  public function index (){
    $users= new User;
    $users= $users-> getallusers();
 
  //  $categories = new User;
  //   $categories=$categories->selectcategories();
  $wikis = new User;
  $wikis = $wikis->getallwikis();
  // $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';

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
      header("Location:index.php?action=dashboard ");

  }


 
public function createUser(){
  $name =Validator::validation($_POST['name']);
  $email =  Validator::validation($_POST['email']);
  $password =Validator::validation($_POST['password']);
  $role =1;
  $password = password_hash($password, PASSWORD_BCRYPT);
  $user = new User();
  $res= $user->addusers($name, $email,$password,$role);
 header('location:../views/logIn.php');
}

public function login() {
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password = $_POST['password'];

  $user = new User();
  $userData = $user->getUserByEmail($email);

  if ($userData && password_verify($password, $userData['password'])) {
      session_start();
      $_SESSION['id'] = $userData['id'];
      $_SESSION['name'] = $userData['name'];
      $_SESSION['email'] = $userData['email'];
      $_SESSION['role_id'] = $userData['role_id'];

      if ($_SESSION['role_id'] == 1) {
          header("Location: ../views/home.php");
      }elseif ($_SESSION['role_id'] == 2){
          header("Location: ../views/Dashbords/dachboard.php");
      }
  } else {

 echo'Votre email et mot de passe sont incorrects, veuillez réessayer';
  }
}


}
