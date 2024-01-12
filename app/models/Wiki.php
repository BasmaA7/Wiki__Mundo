<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
class Wiki  {
  private $db;
  public function __construct(){
     $this->db = Connexion::getInst()->getConnection();
 
  }
    public function getwikis(){
    }
}