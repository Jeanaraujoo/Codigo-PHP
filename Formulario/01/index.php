<!DOCTYPE html>
<html>
<head>
	<title> PDO-CRUD </title>
</head>
<body>
<h1> Formulario de cadastro </h1>
<form action="inserir.php" method="POST">
	<div>
		<label> Nome </label>
		<input type="text" name="nome">
	</div>
	<div>
		<label>E-mail</label>
		<input type="email" name="email">
	</div>
	<div>
		<label>Senha</label>
		<input type="password" name="senha">
	</div>
	<div>
		<input type="submit" name="ENVIAR">
	</div>
</form>

</body>
</html>