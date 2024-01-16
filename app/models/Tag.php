<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;


class Tag {

    private $db;

    public function __construct()
    {
        $this->db =Connexion::getInst()->getConnection();
    }
  
    public function selectTags()
    {
      $query = "SELECT * FROM tags";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $records;
    }
 
   

    public function ajouterTag($titre){
        $sql="INSERT INTO `tags`(`titre`) VALUES (?)";
        $stmt =  $this->db->prepare($sql);
        $stmt->execute([$titre]);
       
     }
        public function tagdelete($id) {
            $stmt = $this->db->prepare("DELETE FROM tags WHERE id = ?");
            $stmt->execute([$id]);
            
        }

    
}
    