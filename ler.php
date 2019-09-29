<?php
	$arquivo = fopen ("pedidos.txt", 'r');
	
	while(!feof($arquivo)){
		$line_of_text = fgets($arquivo);
		print $line_of_text . "<BR>";
		
	}
	fclose($arquivo);
?>