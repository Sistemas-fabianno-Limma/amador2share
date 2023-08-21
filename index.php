<?php
session_start();
$page = $_GET['page'];
require_once('includes_path/header.php');
switch($page){
/////////////////////////
default:
include('pages_public/home.php');
break;
////////////////////////
case "home":
include('pages_public/home.php');
break;
/////////////////////////
case "login":
    include('pages_public/login.php');
    break;
    /////////////////////////
    case "registro":
        include('pages_public/registro.php');
        break;
        /////////////////////////
}
require_once('includes_path/footer.php');
?>