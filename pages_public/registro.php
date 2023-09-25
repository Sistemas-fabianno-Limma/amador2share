<!-- register-->
<div class="register app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Novo Cadastro</h3>
			</div>
			<form method="post" action="<?php echo htmlspecialchars("?page=checkingData&tipo=cadastro");?>">
				<input id="fnome" name="fnome" type="text" placeholder="Primeiro Nome">
				<input id="lnome" name="lnome" type="text" placeholder="Último Nome">
				<input id="usuario" name="usuario" type="text" placeholder="Usuário">
				<input id="email" name="email" type="email" placeholder="Email">
				<input id="senha" name="senha" type="password" placeholder="Senha">
                <input id="rsenha" name="rsenha" type="password" placeholder="Senha">
				<button type="submit" class="button">Registrar</button>
				<strong class="login-now">Já está regitrado? <a href="?page=login">Entre agora</a></strong>
			</form>
			<div class="or">
				<h5>OU</h5>
				<button class="button facebook">Entre com Facebook</button>
				<button class="button google">Entre com Google</button>
			</div>
		</div>
	</div>
	<!-- end register -->