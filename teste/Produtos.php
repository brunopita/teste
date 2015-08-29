<?php
	include 'conect.php';
	$res = mysql_query("Select * From produtos", $conecta);
	for ($i = 0; $i < mysql_num_rows($res); $i++)
		{
			$dados = mysql_fetch_row($res);
			$idProduto = $dados[0];
			$produto = $dados[1];
			$idcategoria = $dados[2];

			echo "$idProduto	$produto 	$idcategoria	";

	    }
		
	
?>