<?php
namespace app\models;
require_once __DIR__.'/../../vendor/autoload.php';
use app\database\Connexion;
use PDO;
class User  {
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

    public function addusers($name, $email, $role) {
      $stmt = $this->db->prepare('INSERT INTO users (name, email, role) VALUES (?, ?, ?)');
      
      // Vérifier si la préparation de la requête a réussi
      if ($stmt) {
          // Liaison des valeurs aux paramètres de la requête
          $stmt->bindParam(1, $name);
          $stmt->bindParam(2, $email);
          $stmt->bindParam(3, $role);
          
          // Exécution de la requête
          $stmt->execute();
          
          // Fermer la requête préparée
          $stmt->closeCursor();
          
          echo "Utilisateur ajouté avec succès.";
      } else {
          // Gérer l'erreur de préparation de la requête
          echo "Erreur lors de la préparation de la requête.";
      }
  }}