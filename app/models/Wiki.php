<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';

use app\database\Connexion;
use PDO;

class Wiki {
  

    protected $db;
    public function __construct() {
        
        $this->db = Connexion::getInst()->getConnection();

    }
    public function selectwikis()
    {
      $query = "SELECT wikis.titre_wiki, wikis.contenu,wikis.status, users.name, categories.nom 
          FROM wikis 
          INNER JOIN users ON wikis.user_id = users.id
          INNER JOIN categories ON wikis.categorie_id = categories.id 
          WHERE wikis.status = 1 
          LIMIT 5";

      $stm = $this->db->prepare($query);
    
      $stm->execute();
      $records = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    
      return ($records);
    }
    public function Reservwikis()
    {
      $query = "SELECT wikis.titre_wiki, wikis.contenu,wikis.status, users.name, categories.nom 
          FROM wikis 
          INNER JOIN users ON wikis.user_id = users.id
          INNER JOIN categories ON wikis.categorie_id = categories.id 
          WHERE wikis.status =0
          LIMIT 5";

      $stm = $this->db->prepare($query);
    
      $stm->execute();
      $records = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    
      return ($records);
    }


}
// class Wiki {

   
//     private $db;
//     private $conn;
//     public function __construct()
//     {
//         $this->conn = Connexion::getInst();
//         $this->db = $this->conn->getConnection();

//     }
//     public function getallwikis()
//     {

//         $query = "SELECT w.*, c.name as name FROM wikis w INNER JOIN categories c ON w.categorie_id = c.id WHERE w.statue = 0";
//         $stm = $this->db->prepare($query);
//         $stm->execute();
//         $res = $stm->fetchAll(PDO::FETCH_ASSOC);

//         return ($res);
//     }
//     public function getwikis(){
//         $query = "SELECT w.titre_wiki, c.nom, w.contenu FROM wikis w INNER JOIN categories c ON w.id_categorie = c.id WHERE w.statue = 1 LIMIT 6";  
//          $stm = $this->db->prepare($query);
//         $stm->execute();
        
       
//         $res = $stm->fetchAll(PDO::FETCH_ASSOC);
      
//         return($res);
//     }
//     // public function countWiki(){
//     //   $query = "SELECT count(*) from wikis";
//     //   $stmt = $this->db->prepare($query);
//     //   $stmt->execute();
//     // }
// }
