<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
 class Categorie{
    private $db;
 public function __construct(){
    $this->db = Connexion::getInst()->getConnection();

 }
 public function addcategories($name){
   $sql="INSERT INTO categories (name) VALUE (?)";
   $stmt =  $this->db->prepare($sql);
   $stmt->execute([$name]);
  
}
public function categoriedelete($id) {
  $sql= "DELETE FROM categories WHERE id = ?";
   $stmt = $this->db->prepare($sql);

   $stmt->execute([$id]);
   
   header("Location: index.php?action=dashboard");

}

public function update($name){
   $stmt= $this->db->prepare("UPDATE categories SET name = :name where id = :id"); 
   // $stmt->bindParam(':id', $name->getId());
   // $stmt->bindParam(':name', $name->getName());

   $stmt->execute();
}




 }


 
 
 
  
   
   
