
<!DOCTYPE html>
<html>
<head>
	<title>Teste 6</title>
</head>
<body>
	<?php 
	echo "Verificando se a versão do PHP é maior que 7.0.0". "<br/>";
	if(version_compare(PHP_VERSION, "7.0.0") >= 0){
		echo "A versão ". PHP_VERSION . " é superior a 7.0.0";
	}
	else{
		echo "A sua versão é ". PHP_VERSION . " e é inferior a versão 7.0.0". "<br/>";
	}
	?>
	<p>
		<?php 
		echo "Atual arquivo pertence a ".  get_current_user()  .  "<br/>"; ;
		?>
	</p>
	<p>
	O sistema operacional que está rodando o arquivo é: 
		<?php 
		echo php_uname() . "<br/>";
		echo "ou " . PHP_OS;
		 ?>	
	</p>
</body>
</html>
