<?php 
            $fnome = inputCheck($_POST['fnome']);
            $lnome = inputCheck($_POST['lnome']);
            $usuario = inputCheck($_POST['usuario']);
            $email = inputCheck($_POST['email']);
            $senha = inputCheck($_POST['senha']);
            $rsenha = inputCheck($_POST['rsenha']);
        $checkPlayer ="SELECT * FROM players WHERE Usuario='". $usuario ."'";
        $resultPlayer = $con->query($checkPlayer);
        $checkEmail  ="SELECT * FROM players WHERE Email='". $email ."'";
        $resultEmail = $con->query($checkEmail); 
 if(empty($fnome)||empty($lnome)||empty($usuario)||empty($email)||empty($senha)||empty($rsenha)){
                echo "
                <div class='line'></div>
                <h1><span>Ops!</span> Você não pode deixar campos em branco!</h1>
                <a class='button' href='?page=registro'>Voltar a Página de cadastro novamente</a>
                <div class='line'></div>
                ";
}else{
if($resultPlayer -> num_rows > 0 ){ // verificando usuario se já existe.

   echo "
                <div class='line'></div>
                <h1><span>Ops!</span> Esse usuário já existe em nosso banco de dados, escolha outro.</h1>
                <a class='button' href='?page=registro'>Voltar a Página de cadastro novamente</a>
                <div class='line'></div>
                ";
}else{
   if($resultEmail -> num_rows > 0){ // verificando email se já existe.

      echo "
                   <div class='line'></div>
                   <h1><span>Ops!</span> Esse email já existe em nosso banco de dados, escolha outro.</h1>
                   <a class='button' href='?page=registro'>Voltar a Página de cadastro novamente</a>
                   <div class='line'></div>
                   ";
   }else{
   if($senha !== $rsenha ){ // verificando se senhas são iguais
       echo "
                      <div class='line'></div>
                      <h1><span>Ops!</span> Senhas não são iguais, por favor tente novamente.</h1>
                      <a class='button' href='?page=registro'>Voltar a Página de cadastro novamente</a>
                      <div class='line'></div>
                      ";     
   }else{
//iniciando registro na base de dados.      
$dados = "INSERT INTO players (Pnome,Lnome,Usuario,Email,PassWord)VALUES('". $fnome ."','". $lnome ."','". $usuario ."','". $email ."','". $senha ."')";
if ($con->query($dados) === TRUE) {
    echo "
                      <div class='line'></div>
                      <h1><span>Yeah Boleiro!</span> Seu cadastro foi feito com sucesso!</h1>
                      <a class='button' href='?page=login'>Faça seu login agora!</a>
                      <div class='line'></div>
                      "; 
  } else {
    echo "Erro: " . $dados . "<br>" . $con->error;
  }
// terminado registro na base de dados         
}       
}
}
}
?>