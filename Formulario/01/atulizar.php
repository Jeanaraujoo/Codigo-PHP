<?php

include "config/conn.php";

$id = 3;

$nome = "Zezé Mota";
$email = "zezem@email";
$senha = "123";

//preparar
$stmt = $connect ->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");


//trocar
$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam("email", $email);
$stmt->bindParam(":senha", $senha);


//executar
$stmt->execute();
echo "usuario atualizado com suceso";





?>