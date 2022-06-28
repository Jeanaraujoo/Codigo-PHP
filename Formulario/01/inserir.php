<?php 

include "config/conn.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//echo "$nome <br> $email <br> $senha";
 
//preparar
$stmt = $connect->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:NOME, :EMAIL, :SENHA)");


//trocar
$stmt ->bindParam(':NOME', $nome);
$stmt ->bindParam(':EMAIL', $email);
$stmt ->bindParam(':SENHA', $senha);



//executar
$stmt->execute();

echo "Usuario cadastrado";

?>
