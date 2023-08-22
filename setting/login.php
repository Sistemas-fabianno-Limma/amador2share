<?php
$usuario = inputCheck($_POST['usuario']);
$senha = inputCheck($_POST['senha']);
////////////////////////////////////q
$checkPlayer ="SELECT * FROM players WHERE Usuario='". $usuario ."'";
$resultPlayer = $con->query($checkPlayer);
while($row = $resultPlayer->fetch_assoc()) {
echo $userData = $row['Usuario'];
echo $passData = $row['PassWord'];
  }

?>