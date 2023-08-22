<?php
$usuario = inputCheck($_POST['usuario']);
$senha = inputCheck($_POST['senha']);
////////////////////////////////////q
$checkPlayer ="SELECT * FROM players WHERE Usuario='". $usuario ."'";
$resultPlayer = $con->query($checkPlayer);
while($row = $resultPlayer->fetch_assoc()) {
$userData = $row['Usuario'];
$passData = $row['PassWord'];
  }
 if(empty($usuario) || empty($senha)) {
    echo "
    <div class='line'></div>
    <h1><span>Ops!</span> Você não pode deixar campos em branco!</h1>
    <a class='button' href='?page=login'>Voltar a Página de login etente novamente</a>
    <div class='line'></div>
    ";   
 }else{
if($resultPlayer -> num_rows() > 0){
if($senha == $passData){
//////////////////////////////////////
    echo "
    <div class='line'></div>
    <h1><span>Nice!</span>Login Liberado!</h1>
    <div class='line'></div>
    ";  
    /////////////////////////////////
}else{   
        echo "
        <div class='line'></div>
        <h1><span>Ops!</span> Essa senha não confere!</h1>
        <a class='button' href='?page=login'>Voltar a Página de login etente novamente</a>
        <div class='line'></div>
       "; 
}
}else{
       echo "
       <div class='line'></div>
      <h1><span>Ops!</span> Esse usuário não confere!</h1>
      <a class='button' href='?page=login'>Voltar a Página de login etente novamente</a>
      <div class='line'></div>
      ";    
}
}

?>