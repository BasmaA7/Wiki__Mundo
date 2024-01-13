<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;
use app\helper\Validator;

session_start();

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
    $email =  Validator::validation($_POST['email']);
  $password =Validator::validation($_POST['password']);
    $user = new User();
    $res = $user->getUserByEmail($email);
    if ($res && password_verify($password, $res['password'])) {
             $_SESSION['id'] = $res['id'];
              $_SESSION['name'] = $res['name'];
              $_SESSION['email'] = $res['email'];
              $_SESSION['role_id'] = $res['role_id'];
              if ($res['role_id'] == 1) {
                  header('Location:../view/home.php'); 
              } else {
                  header('Location: ../view/Dashbord/dashboard.php'); 
              }
              exit();
          } else {
              echo 'Identifiants incorrects.';
          }
      }
  
}







