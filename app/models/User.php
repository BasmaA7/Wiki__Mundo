<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
class User  {
  private $db;
  private $name;
  private $email;
  private $password;
  private $role;

    public function __construct()
    {
        $this->db = Connexion::getInst()->getConnection();
    }
    public function getallusers()
    {
      $query = "SELECT * FROM users";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return ($res);
    }


    public function getallwikis()
    {

        $query = "SELECT w.*, c.nom as nom FROM wikis w INNER JOIN categories c ON w.id_categorie = c.id WHERE w.statue = 0";
        $stm = $this->db->prepare($query);
        $stm->execute();
        $res = $stm->fetchAll(PDO::FETCH_ASSOC);

        return ($res);
    }
    public function acceptwiki($id) {
      $stmt =  $this->db->prepare("update wikis set statue = 1 where id = $id");
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $res;
  }
    
    public function refuser($id)
    {

        $stmt = $this->db->prepare("delete from wikis where id = $id");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function addusers($name, $email, $password, $role) {
      $stmt = $this->db->prepare('INSERT INTO users (null,name,password, email, role) VALUES (null,?,?,?, ?)');
      $stmt->execute();

    

}
}