<!DOCTYPE html>
<html>
<head>
	<title>Teste 8</title>
</head>
<body>
<p>
	Retornando um novo array sem itens duplicados do array{ a, a, a, b, b, c, d, d, e, e, f, f } <br/>
	<?php 
	$letras = ['a', 'a', 'a', 'b', 'b', 'c', 'd', 'd', 'e', 'e', 'f', 'f'];
	$result = array_values( array_unique($letras) );
	print_r($result);
	 ?>
</p>
</body>
</html>