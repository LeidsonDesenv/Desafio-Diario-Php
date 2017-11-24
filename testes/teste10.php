<?php 
function showColorList(){
	$colors = ['preto','azul', 'verde', 'vermelho', 'roxo', 'rosa'];

	echo "<ol>";
	foreach ($colors as $color) {
		echo "<li> $color </li>";		
	}
	echo "</ol>";
}


	$colors = ['white', 'green', 'red', 'blue', 'black'];
	$texto = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Teste 10</title>
</head>
<body>
<p>
<?php 
	echo "Lista ordenada <br/>";
	showColorList();
	echo "<br/>" . $texto;
 ?>
 </p>
</body>
</html>