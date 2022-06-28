<?php

include "config/conn.php";

$id = 2;

//preparar
$stmt = $connect->prepare("DELETE FROM usuarios WHERE id = :id");

//trocar
$stmt->bindParam("id",$id);

//executar
$stmt->execute();
echo"usuario deletado com sucesso";



?>