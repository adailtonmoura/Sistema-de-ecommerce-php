<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha LOja - Logon de Usuário</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
<style>

.navbar{
	margin-bottom: 0;
}
	
	
</style>
	

<body>
	<?php
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Logon de Usuário</h2>
				
					<div class="form-group">
				
					<form method="post" action="validaUsuario.php" name="logon">
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" required id="email">
					</div>
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="senha" type="password" class="form-control" required id="senha">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-ok"> Entrar</span>
					
				</button>
						
					</form>
				
				
				<a href="formUsuario.php">
				<button type="submit" class="btn btn-sm btn-link">
					
					 cadastrar agora
					
				</button></a>
				
					<a href="esqueciSenha.php">
					<button type="submit" class="btn btn-sm btn-link">
					
					Esqueci minha senha
					
				</button></a>
							
			</div>
		</div>
	</div>
	
	<?php include 'footer.html' ?>
	
</body>
</html>