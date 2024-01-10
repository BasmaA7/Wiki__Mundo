<?php
namespace app\models;
require_once __DIR__ . '/../../vendor/autoload.php';
use FTP\Connection;
public function getallusers()
{
    $query = "SELECT * FROM users";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return ($records);
}