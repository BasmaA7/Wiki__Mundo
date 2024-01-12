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
}