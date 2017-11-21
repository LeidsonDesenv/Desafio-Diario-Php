<!DOCTYPE html>
<html>
<head>
	<title>Teste 7</title>
</head>
<body>
<p>
Endereço do diretório dos arquivos temporários. <br/>	
	<?php 
	echo sys_get_temp_dir();
 	?>
 </p>

 <p>
 	<?php 
 	//trocando os valores das variáveis e monstrando o resultado.
 	$var1 = "5000";
 	$var2 = "9000";
 	echo "Var1 é $var1 e Var2 é $var2" . "<br/>";
 	$temp = $var1;
 	$var1 = $var2;
 	$var2 = $temp;
 	echo "Agora Var1 é $var1 e Var2 é $var2"; 	
 	 ?>
 	<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
 		Escreva os números separados por vírgula: <input type="text" name="numbers" required> <button type="submit">Enviar</button>
 	</form> 

 	<?php 
 	if(isset($_GET["numbers"])){ 		
 		$texto = $_GET["numbers"];
 		echo $texto . "<br/>";
 		$numbersTest = explode(",", $texto);
 		$numbers = [];
 		for ($i=0; $i < count($numbersTest) ; $i++) { 
 			$numbers[$i] = trim($numbersTest[$i]);
 		}

 		$result = "";
 		for ($i=0; $i < count($numbers) ; $i++) { 

 			if ($numbers[$i] == "zero") {
 				$result .= "0";
 			}else if ($numbers[$i] == "um") {
 				$result .= "1";
 			}else if ($numbers[$i] == "dois") {
 				$result .= "2";
 			}else if ($numbers[$i] == "três") {
 				$result .= "3";
 			}else if ($numbers[$i] == "quatro") {
 				$result .= "4";
 			}else if ($numbers[$i] == "cinco") {
 				$result .= "5";
 			}else if ($numbers[$i] == "seis") {
 				$result .= "6";
 			}else if ($numbers[$i] == "sete") {
 				$result .= "7";
 			}else if ($numbers[$i] == "oito") {
 				$result .= "8";
 			}else if ($numbers[$i] == "nove") {
 				$result .= "9";
 			}

 		}
 		echo $result;
 	}
 	?>
 </p>
</body>
</html>