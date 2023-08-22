<div class="page-404 app-pages app-section">
		<div class="container">
			<?php
            $tipo = $_GET['tipo'];
////////////////////////////////////////////////////////////////////
 if($tipo == "cadastro"){ 
    // criando registro do usuario           
            $fnome = $_POST['fnome'];
            $lnome = $_POST['lnome'];
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $rsenha = $_POST['rsenha'];
 if(empty($fnone)||empty($lnone)||empty($usuario)||empty($email)||empty($senha)||empty($rsenha)){
                echo "
                <h1><span>Ops!</span> Você não pdoe deixar campos em branco!</h1>
                <a class='button' href='?page=registro'>Voltar a Página de cadastro novamente</a>
                ";
}else{


}        

 } elseif($tipo == "login"){
   // criando registro do usuario  
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

 }else{
if(empty($tipo)){
echo "
<h1><span>Ops!</span> pagína errada ou não tem permissão!</h1>
<a class='button' href='?page=home'>Voltar a Pagína inicial</a>
";
}
 }
            ?>
		</div>
	</div>