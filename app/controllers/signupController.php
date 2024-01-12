<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;
use app\helper\Validator;


class SignupController {
  
  public function index(){
    if (isset($_post['signup'])) {
    var_dump($_POST['$email']);die;
    $name =Validator::validation($_POST['name']);
    $email =  Validator::validation($_POST['email']);
    $password =Validator::validation($_POST['password']);
    $role =0;
    $password = password_hash($password, PASSWORD_BCRYPT);
    $user = new User();
    // $res= $user->addusers($user, $email,$password,$role);
  }
}
}