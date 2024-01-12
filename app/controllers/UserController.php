<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;



class UserController {
  public function index (){
    $users= new User;
   $users= $users-> getallusers();


   $newUserModel = new User;
  $newUserModel->addusers('John Doe', 'john@example.com', 'password123');

  echo "Utilisateur ajouté avec succès.";

 
   $categories = new User;
    $categories=$categories->selectcategories();

    include "../../views/Dashbords/dachboard.php";
  }
 
}
