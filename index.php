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
case "news":
    include('pages_public/novidades.php');
    break;
    /////////////////////////
case "players":
    include('pages_public/players.php');
    break;
    /////////////////////////
case "clubes":
    include('pages_public/clubes.php');
    break;
/////////////////////////
    /////////////////////////
    case "player":
        include('pages_private/player.php');
        break;
        /////////////////////////
    case "meuclube":
        include('pages_private/meuClube.php');
        break;
    /////////////////////////
case "checkingData":
include('checking.php');
break;

}
require_once('includes_path/footer.php');
?>