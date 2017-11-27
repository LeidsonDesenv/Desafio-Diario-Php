<?php 
$lista = array("abcd","abc","de","dsddhjjj","gua","wer");
function getShortestAndLongest($list){
	$shortestNum = 500; //qualquer texto deve ser menor que 500 caracteris	
	$longestNum = 0; //qualquer palavra deve ser maior que 0
	$longest = "";
	$shortest = "";
	foreach ($list as $key => $item) {
		if(strlen($item) > $longestNum){
			$longestNum = strlen($item);
			$longest = $item;
		}
		if(strlen($item) < $shortestNum){
			$shortestNum = strlen($item);
			$shortest = $item;
		}
	}
	echo "O menor item é <strong>$shortest</strong> e o maior item é <strong>$longest</strong>";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste 13</title>
</head>
<body>
<h3>Verificando qual é a maior e a menor string dentro de um array</h3>
<p>
	<?php getShortestAndLongest($lista); ?>
</p>
</body>
</html>