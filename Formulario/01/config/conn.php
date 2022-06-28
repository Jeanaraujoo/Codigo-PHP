<?php 
  // host, usar, pass, bd
   $host = "localhost";
   $user = "root";
   $pass = "";
   $database = "senai";

   try {
        $connect = new PDO("mysql:host=" . $host . "; dbname=" . $database, $user, $pass); 
       // echo "Conexão realizada com sucesso!";
	} catch (Exception $e) {
		//echo "Erro: .$e ->getMessage()";
 }

 ?>	