<?php 
	$dsn = "mysql:host=localhost; dbname=ada_cursos;charset=utf8";
	$usuario = "root";
	$senha = "";

	try {
		$conexao = new PDO( $dsn, $usuario, $senha );
		//echo "Conectado com sucesso!";
	} catch (PDOException $e) {
		echo "Ocorreu um ERRO: ".$e->getMessage();
	}
 ?>