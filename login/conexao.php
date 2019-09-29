<?php
	
	$dsn 		= "mysql:host=localhost;dbname=id6709120_login;charset=utf8";
	$usuario 	= "id6709120_wellsburguer";
	$senha 		= "igor2009";
	
	try{
		
		$PDO = new PDO($dsn, $usuario, $senha);
		
		//echo "conectou";
		
	}catch (PDOException $erro){
		//echo "Erro: " . $erro->getMessage();
		echo "conexao_erro";
		exit;
	}
?>