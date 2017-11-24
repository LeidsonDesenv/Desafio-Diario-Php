<?php 
function getNoRepeated($word){
	// faz o loop navegar pela qnt de letras
	for ($i=0; $i < strlen($word); $i++) { 
		//substr_count conta qnts letras são repetidas usando substr com o indice e indicando que quer só uma lentra "1"
		if(substr_count($word, substr($word, $i, 1) ) == 1 ){
			return substr($word, $i, 1);
		}
	}
}
// list1 = 1 2 3 . obs separados por espaço
function multLists($list1 ,  $list2){
	$num1 = explode(" ", $list1);
	$num2 = explode(" ", $list2);
	$result = ""; 
	for ($i=0; $i < count($num1); $i++) { 
		$result .= $num1[$i] * $num2[$i] ;
		$result .= " ";
	}
	$result = trim($result);
	return $result;
}

function sumDigits($num){
	$result = 0; 
	for ($i=0; $i <  strlen($num); $i++) { 
		$result += $num[$i];
	}
	return $result;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste 9</title>
</head>
<body>
<p>
	Verificando qual letra é a primeira a não se repetir na palavra "araras". <br/>
	<?php 
	echo getNoRepeated("araras");
	echo "<br/>";
	echo "Testando com 5 10 20 e 5 2 2: <br/>";
	echo multLists("5 10 20", "5 2 2") . "<br/>";
	echo "Testando o número 5555 <br/>";
	echo sumDigits("5555");
	 ?>
</p>
</body>
</html>