<?php 
function getEndString($mainString , $testeString)	
{
	$str1 = strlen($mainString);
	$str2 = strlen($testeString);

	$sub = substr($mainString, $str1 - $str2 );
	if($sub == $testeString){
		return "true";
	}
	else{
		return "false";
	}
}


	
?>


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
<p>
	O método <b>strpos</b> pesquisa uma palavra dentro de uma frase, mas nesse caso foi usado <b>strlen</b> para pegar o tamanho das strings e testado usando 
	<b>substr</b> <br/>
<?php 
echo getEndString("Este é um teste", "teste") . "<br/>";

 ?>	
</p>
<table>
	<?php 
	for ($i=1; $i < 7; $i++) { 
		echo "<tr>";
		for ($j=1; $j < 7; $j++) { 
			echo "<td>". $j * $i . "</td>";
		}
		echo "</tr>";
	}
	 ?>

</table>

</body>
</html>