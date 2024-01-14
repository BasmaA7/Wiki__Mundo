<?php 
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;
use app\models\Categorie;
use app\Models\Tag;
use app\helper\Validator;


class UserController {
  public function index (){
    $users= new User();
    $users= $users-> getallusers();

    // $wikis = new User();
    // $wikis = $wikis->getallwikis();

    // $wikisaccepted = new User();
    // $wikisaccepted = $wikisaccepted->getacceptedwikis();

    // $tags = new User();
    // $tags = $tags->getalltags();

    // $categories = new User();
    // $categories = $categories->getAllcategories();
   
 
    include "../../views/Dashbords/dachboard.php";


    
  }
 
//   public function accepter()
//   {
//       $id = $_POST['id'];
//       $wiki = new User;
//       $wikis = $wiki->acceptwiki($id);
//       header('Location: ' . $_SERVER['HTTP_REFERER']);
//   }
//   public function archive()
//     {
//         $id = $_POST['id'];
//         $wikis = new User;
//         $wikis->archive($id);
//         header('Location: ' . $_SERVER['HTTP_REFERER']);
//     }

    // public function delete()
    // {
    //     $id = $_POST['id'];
    //     $wikis = new User;
    //     $wikis->delete($id);
    //     header("Location:index.php?action=dashboard ");

    // }
  public function refuser()
  {
      $id = $_POST['id'];
      $wikis = new User;
      $wikis->refuser($id);
      header("Location:index.php?action=dashboard ");

  }

    public function addTags()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $tags = new Tag;
            $nom = $_POST['nom_tag'];
            $tags->addtags($nom);
            header("Location:index.php?route=dashboard ");

        }
    }
    public function tagdelete()
    {

        $id = $_POST['id'];
        $tagsModel = new Tag;
        $tagsModel->tagdelete($id);
        header("Location: index.php?route=dashboard");

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

public function addCategories()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $tags = new Categorie;
        $nom = $_POST['nom_categorie'];
        $tags->addcategories($nom);
        header("Location:index.php?action=dashboard ");

    }
    
}
public function categoriedelete()
{

    $id = $_POST['id'];
    $tagsModel = new Tag;
    $tagsModel->categoriedelete($id);
    header("Location: index.php?route=dashboard");

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
