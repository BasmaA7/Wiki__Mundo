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
    public function selectallwikis()
    {
      $query = "SELECT* from  wikis, users.name, categories.nom 
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
      $query = "SELECT wikis.id,wikis.titre_wiki, wikis.contenu,wikis.status, users.name, categories.nom 
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
     public function accept($id) {
      $stmt =  $this->db->prepare("update wikis set status = 1 where id = $id");
      $stmt->execute();
     



}
public function addWiki($titre,$contenu,$categorie,$id,$tags)
    {
        $query = $this->db->prepare("INSERT INTO wikis( titre, contenu, status, categorie_id, user_id)  VALUES(:titre, :contenu, :isAccepted, :id_categorie, :id_user)");
        $query->bindValue(':titre', $titre);
        $query->bindValue(':contenu', $contenu);
        $query->bindValue(':id_categorie', $categorie);
        $query->bindValue(':id_user',$id);
        $query->bindValue(':isAccepted', 0);
        $query->execute();


        $lastInsertId = $this->db->lastInsertId();
        foreach($tags as $tag):
        $query = $this->db->prepare("INSERT INTO wikitags( id_wiki, id_tag)   VALUES($lastInsertId,:tag)");
        $query->bindValue(':tag', $tag);
        $res = $query->execute();
        endforeach;
        return $res;
    }

    }



   
  
      

