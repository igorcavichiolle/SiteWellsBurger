<?php
	$p = $_GET['lanche'];
	$f = $_GET['fone'];
	$arquivo = fopen("pedidos.txt", 'a+');
	fwrite($arquivo, "Pedido Lache: $p Fone: $f \n");
	fclose($arquivo);
?>