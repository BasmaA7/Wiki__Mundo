<?php
namespace app\Models;
require_once __DIR__.'/../../vendor/autoload.php';

use app\database\Connexion;
use PDO;
class Admin  {
  private $db;
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


}