<?php
namespace database;
use PDO;
use PDOException;
use Dotenv\Dotenv;
require_once __DIR__.'/../vendor/autoload.php';


$dotenv =Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();
class Connexion {
    private $conn;
    private static $inst;
    public function __construct() {
        $servername = $_ENV["DB_HOST"];
        $dbname = $_ENV["DB_NAME"];
        $username = $_ENV["DB_USER"];
        $password = $_ENV["PASSWORD"];
 
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            echo "done";
        } 
        catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    public static function getInst(){
        if(!isset(self::$inst)){
            self::$inst = new Connexion();
        }
        return self::$inst;
    }

    public function getConnect(){
        return $this->conn;
    }
}

Connexion::getInst();





