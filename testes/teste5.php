<!DOCTYPE html>
<html>
<head>
	<title>Teste 5</title>
</head>
<body>
<p>
	Método que retorna o último erro ocorrido error_get_last() nesse caso usei a variável $a que não foi declarada.<br/>
	<?php 
	echo $a;
	print_r(error_get_last());	
	
	?> 
</p>

<form action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
	<input type="text" name="num" required>
	<button type="submit">Testar</button>
</form>
<?php 

if(isset($_GET["num"]) ) {
	$num = $_GET["num"]	;
	$result = "";
	if($num > 30){
		$result = "O $num é maior que 30";
	}
	else if($num == 30){
		$result = "O $num é igual que 30";
	}
	else if($num > 20){
		$result = "O $num é maior que 20";	
	}
	else if($num == 20){
		$result = "O $num é igual que 20";	
	}
	else if($num > 10){
		$result = "O $num é maior que 10";	
	}
	else if($num == 10){
		$result = "O $num é igual que 10";	
	}
	else{
		$result = "O $num é menor que 10";	
	}	
	echo $result;
	$num = 0;

}	
 ?>

 <p>
 	Para pegar a url completa usa-se http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI] <br/>
 	<?php 
 	$fullpath = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 	echo $fullpath;
 	?>
 </p>

</body>
</html>