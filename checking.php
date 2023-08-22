<div class="page-404 app-pages app-section">
		<div class="container">
			<?php
$tipo = $_GET['tipo'];
////////////////////////////////////////////////////////////////////
if($tipo == "cadastro"){ 
    // criando registro do usuário           
   require_once('setting/cadastro.php');
    // finalizando registro do usuário
} else if($tipo == "login"){
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