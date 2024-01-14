<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
 class Tag{
    private $db;
 public function __construct(){
    $this->db = Connexion::getInst()->getConnection();

 }

 public function addtags($nom){
   $stmt =  $this->db->prepare("INSERT INTO tags (nom)
   VALUE (?)");
   $stmt->execute([$nom]);
  
}

   public function tagdelete($id) {
       $stmt = $this->db->prepare("DELETE FROM tags WHERE id = ?");
       $stmt->execute([$id]);
       
       header("Location: index.php?action=dashboard");
   }
}