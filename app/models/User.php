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
        $success = $stmt->execute();

        return $success;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

      }
      public function selectcategories()
      {
          $query = "SELECT * FROM categories";
          $stmt = $this->db->prepare($query);
          $stmt->execute();
          $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $res;
      }
     
      public function getUserByEmail($email) {
        try {
            $sql = 'SELECT * FROM `users` WHERE email = :email';
            $stmt = $this->db->prepare($sql);
         
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
        
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
            return $userData;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    


}
