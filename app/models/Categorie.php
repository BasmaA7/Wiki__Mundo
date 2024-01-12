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
    public function selectcategories()
    {
        $query = "SELECT * FROM categories";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

 }

