<?php
	$servidor = "localhost";
	$banco = "dbprodutos";
	$usuario = "root";
	$senha = "Senai115";
	$conecta = mysql_connect($servidor, $usuario, $senha, $banco);
	mysql_select_db($banco,$conecta) or die ("Banco nao achado");
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

?>