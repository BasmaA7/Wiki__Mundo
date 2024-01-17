<?php
namespace app\Controllers;
use app\models\Wiki;

class HomeController{

    public function gethome(){
        $wikis = new Wiki;
        $wikis = $wikis->selectwikis(); 
        include '../views/home.php';
    }
    
    public function wikishow(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $wikis= new Wiki();
            $wikis = $wikis-selectwikis($id);
        }
    }
   

    }
