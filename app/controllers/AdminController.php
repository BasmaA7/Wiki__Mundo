<?php 
namespace app\controllers;
// require_once __DIR__.'/../../vendor/autoload.php';
use app\models\Admin;
use app\models\Categorie;
use app\models\Tag;
use app\helper\Validator;


class AdminController {
  public function index (){
    $users= new Admin();
    $users= $users-> getallusers();

  
$wikis=new Admin();
$wikis= $wikis->selectwikis();
    // $wikisaccepted = new Admin();
    // $wikisaccepted = $wikisaccepted->getacceptedwikis();

    $tags = new Admin();
    $tags = $tags->selectTags();

    $category= new Admin();
    $category = $category->selectcategories();

 
    include "../views/Dashbords/dachboard.php";


    
  }
 
//   public function createUser(){
//     $name =Validator::validation($_POST['name']);
//     $email =  Validator::validation($_POST['email']);
//     $password =Validator::validation($_POST['password']);
//     $role =1;
//     $password = password_hash($password, PASSWORD_BCRYPT);
//     $user = new Admin();
//     $res= $user->addusers($name, $email,$password,$role);
//    header('location:../../views/logIn.php');
  
//   public function accepter()
//   {
//       $id = $_POST['id'];
//       $wiki = new Admin();
//       $wikis = $wiki->acceptwiki($id);
//       header('Location: ' . $_SERVER['HTTP_REFERER']);
//   }
//   public function archive()
//     {
//         $id = $_POST['id'];
//         $wikis = new Admin();
//         $wikis->archive($id);
//         header('Location: ' . $_SERVER['HTTP_REFERER']);
//     }

    // public function delete()
    // {
    //     $id = $_POST['id'];
    //     $wikis = new Admin();
    //     $wikis->delete($id);
    //     header("Location:index.php?action=dashboard ");

    // }
  public function refuser()
  {
      $id = $_POST['id'];
      $wikis = new Admin();
      $wikis->refuser($id);
      header("Location:index.php?action=dashboard ");

  }

    public function addTags()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $tags = new Tag;
            $nom = $_POST['titre'];
            $tags->addtags($nom);
            header("Location:index.php?action=dashboard ");

        }
    }
    public function tagdelete()
    {

        $id = $_POST['id'];
        $tagsModel = new Tag;
        $tagsModel->tagdelete($id);
        header("Location: index.php?action=dashboard");

    }


public function addCategories()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $category = new Categorie;
        $nom = $_POST['nom'];
        $category->addcategories($nom);
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

  $user = new Admin();
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
