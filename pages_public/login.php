<!-- login-->
<div class="login app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Fazer Login</h3>
			</div>
			<form method="post" action="<?php echo htmlspecialchars("?page=checkingData&tipo=login");?>">
				<input type="text" name="usuario" placeholder="Digite seu usuário">
				<input type="password" name="senha" placeholder="Sua Senha">
				<div><a href="#" class="forgot">Perdeu a senha?</a></div>
				<button typw="submit" class="button">Fazer login</button>
				<div class="create-account">Sem registro? <a href="<?php echo htmlspecialchars("?page=registro");?>">Cre umaconta agora!</a></div>
			</form>
			<div class="or">
				<h5>OU</h5>
				<button class="button facebook">Login with Facebook</button>
				<button class="button google">Login with Google </button>
			</div>
		</div>
	</div>
	<!-- end login -->

