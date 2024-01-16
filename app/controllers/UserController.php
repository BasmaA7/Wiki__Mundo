<?php 
namespace app\controllers;
// require_once __DIR__.'/../../vendor/autoload.php';
use app\models\User;
use app\models\Categorie;
use app\models\Tag;
use app\models\Wiki;
use app\helper\Validator;


class UserController {
   
  public function index (){
   
    $users= new User();
    $users= $users-> getallusers();
    include "../views/Dashbords/dachboard.php";



}

    function dashWiki(){
        $wikis=new Wiki();
        $wikis= $wikis->selectwikis();
        $wikisaccepted = new Wiki();
        $wikisaccepted = $wikisaccepted->();
        $ReservWeki = new Wiki();
        $ReservWeki= $ReservWeki->Reservwikis();
    include "../views/Dashbords/WikiDashbord.php";
      }

    
public function dashTag(){
    $tags = new Tag();
    $tags = $tags->selectTags();
    include "../views/Dashbords/tagDashbord.php";

}
   
public function dashCat(){
    $category= new Categorie();
    $category = $category->selectcategories();
    include "../views/Dashbords/categorieDashbord.php";

}
   

 
    


    
  
 
//   public function createUser(){
//     $name =Validator::validation($_POST['name']);
//     $email =  Validator::validation($_POST['email']);
//     $password =Validator::validation($_POST['password']);
//     $role =1;
//     $password = password_hash($password, PASSWORD_BCRYPT);
//     $user = new User();
//     $res= $user->addusers($name, $email,$password,$role);
//    header('location:../../views/logIn.php');
  
//   public function accepter()
//   {
//       $id = $_POST['id'];
//       $wiki = new User();
//       $wikis = $wiki->acceptwiki($id);
//       header('Location: ' . $_SERVER['HTTP_REFERER']);
//   }
//   public function archive()
//     {
//         $id = $_POST['id'];
//         $wikis = new User();
//         $wikis->archive($id);
//         header('Location: ' . $_SERVER['HTTP_REFERER']);
//     }

    public function delete()
    {
        $id = $_POST['id'];
        $user = new User();
        $user->deleteusers($id);
        header("Location:read ");

    }
    
  public function refuser()
  {
      $id = $_POST['id'];
      $wikis = new User();
      $wikis->refuser($id);
      header("Location:index.php?action=read ");

  }

    public function addTags()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $tags = new Tag;
            $nom = $_POST['titre'];
            $tags->ajouterTag($nom);
            header("Location:readTags");

        }
    }
    public function tagdelete()
    {

        $id = $_POST['id'];
        $tagsModel = new Tag;
        $tagsModel->tagdelete($id);
        header("Location: readTags");

    }


    public function addCategories()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!empty($_POST['nom'])) {
                $category = new Categorie;
                $name = $_POST['nom'];
                $category->addcategories($name);
                header("Location: readCat");
            } else {
                // Handle the case when 'nom' is empty
                echo "Category name is required!";
            }
        }
    }
    
    public function addTag()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!empty($_POST['titre'])) {
                $category = new Tag;
                $titre = $_POST['titre'];
                $category->ajouterTag($titre);
                header("Location: readTags");
            } else {
                // Handle the case when 'nom' is empty
                echo "Category name is required!";
            }
        }
    }
    
public function  suprimerCa()
{

    $id = $_POST['id'];
    $category = new Categorie;
    $category->deletecategorie($id);
    header("Location: readCat");

}

public function  UpdateCa()
{

    $id= $_POST['id'];
    $name=$_POST['nom'];
    $category = new Categorie;
    $category->update($id,$name);
    header("Location: updeateCat");
       

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
