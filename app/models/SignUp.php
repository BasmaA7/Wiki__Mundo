<?php
namespace  app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
use PDOException;

class SignUp
{
    private $id;
    private $email;
    private $password;
   private $db;
    public function __construct()
    {
        $this->db = Connexion::getInst()->getConnection();
    }

    public function vrfyemail($email)
    {
        $this->email = $email;
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}