<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
use PDOException;
class User {
  private $db;
  private $conn;
  private $name;
  private $email;
  private $password;
  private $role;

    public function __construct()
    {
        $this->conn = Connexion::getInst();
        $this->db = $this->conn->getConnection();

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
      try{
        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `role_id`) values ('$name', '$email', '$password', $role)";
        // echo $sql;
        // exit;
        
        $stmt = $this->db->prepare($sql);

        // $stmt->bindParam(1, $name);
        // $stmt->bindParam(2, $email);
        // $stmt->bindParam(3, $password);
        // $stmt->bindParam(4, $role);
        $success = $stmt->execute();

        return $success;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

      }

     

    

}
