<?php
//setting data bd 
$server = "localhost";
$bd = "amadorshare";
$pass = "";
$user = "root";
/////////////////////////////////////
//setting connection db

// setting site
$namesite = "Amador2Share";
$descsite = "Rede social dedicado ao futebol amador.";
$url = "localhost/amador2share";
$metasite = "futshare, futebol, brasil";
$logosite = "";
$footer = "Software produzido por Sistemas FL - Copyright ".date('Y');
$versão = "1.0.0";
$version = "<span class='label label-info'>Versão ".$versão."</span>";

$con = new mysqli($server, $user, $pass, $bd);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//////////////////////////////////////////////////
