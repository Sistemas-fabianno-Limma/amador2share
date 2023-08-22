<div class="page-404 app-pages app-section">
		<div class="container">
			<?php
$tipo = inputCheck($_GET['tipo']);
////////////////////////////////////////////////////////////////////
if($tipo == "cadastro"){ 
    // criando registro do usuário           
   require_once('setting/cadastro.php');
    // finalizando registro do usuário
} else if($tipo == "login"){
    // criando registro do usuário           
    require_once('setting/login.php');
    // finalizando registro do usuário
}else{
if(empty($tipo) XOR $tipo != "cadastro" XOR $tipo != "login"){
echo "
<h1><span>Ops!</span> pagína errada ou não tem permissão!</h1>
<a class='button' href='?page=home'>Voltar a Pagína inicial</a>
";
}
 }
            ?>
		</div>
	</div>