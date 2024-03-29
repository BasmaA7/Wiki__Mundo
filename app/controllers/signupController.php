<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;
use app\helper\Validator;

class SignupController {
  public function index(){
    if (isset($_POST['signup'])) {
      $name = Validator::validation($_POST['name']);
      $email =  Validator::validation($_POST['email']);
      $password = Validator::validation($_POST['password']);
      $role = 1;
      $password = password_hash($password, PASSWORD_BCRYPT);
      $user=new User();

      // Ajouter des vérifications ici
      if ($name && $email && $password) {

        $res = $user->addusers( $name,$email, $password, $role);

        if ($res) {

         header('location:logIn');
        } else {
          echo 'Erreur lors de l\'insertion de l\'utilisateur';
        }
      } else {
        echo 'Veuillez remplir tous les champs correctement.';
      }
    }

    include_once '../views/SignUp.php';
  }
  public function login(){
    include_once '../views/LogIn.php';
  }



}
