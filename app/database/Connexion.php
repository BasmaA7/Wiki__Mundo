<?php
namespace app\database;
require_once __DIR__.'/../../vendor/autoload.php';
use PDO;
use PDOException;

class Connexion {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "wiki";
    private $conn;

    private static $inst=null;

    private function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO($dsn, $this->user, $this->password);
//   echo'done';

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInst(){
        if (self::$inst===null){
            self::$inst = new self;
        }
        return self::$inst;
    }

    public function getConnection() {
        return $this->conn;
    }
}
Connexion::getInst();