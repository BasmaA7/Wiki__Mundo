<?php
require '../models/User.php';
 if(isset( $_POST['action'])){
 $action= $_POST['action'];
 switch($action){
  case 'read':
    require_once 'controllers\User.php';
   readUser();
   break;
 }
 }

