<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
use PDOException;
//  class Categorie{
//     private $db;
//  public function __construct(){
//     $this->db = Connexion::getInst()->getConnection();

//  }
//  public function addcategories($name){
//    $sql="INSERT INTO categories (name) VALUE (?)";
//    $stmt =  $this->db->prepare($sql);
//    $stmt->execute([$name]);
  
// }
// public function categoriedelete($id) {
//   $sql= "DELETE FROM categories WHERE id = ?";
//    $stmt = $this->db->prepare($sql);

//    $stmt->execute([$id]);
   
//    header("Location: index.php?action=dashboard");

// }

// public function update($name){
//    $stmt= $this->db->prepare("UPDATE categories SET name = :name where id = :id"); 
//    // $stmt->bindParam(':id', $name->getId());
//    // $stmt->bindParam(':name', $name->getName());

//    $stmt->execute();
// }




//  }


class Categorie {

    private $db;
    private $conn;


    public function __construct()
    {
        $this->conn = Connexion::getInst();
        $this->db = $this->conn->getConnection();

    }
  
    public function selectcategories()
    {
  
      $query = "SELECT *FROM categories";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $res;
  
    }

   
 public function addcategories($nom){
   $sql="INSERT INTO `categories`(`nom`) VALUES (?)";
   $stmt =  $this->db->prepare($sql);
   $stmt->execute([$nom]);
  
}


    public function deletecategorie($id){
        $query="DELETE FROM categories WHERE id=:id";
        $stmt=$this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
        $res=$stmt->execute();
        return $res;

    }
  
    public function update($id,$name){
        $query="UPDATE `categories` SET nom=':nom' WHERE id=:id";
        $stmt=$this->db->prepare($query);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;

    }
  
}
    
 
 
  
   
   
