<?php 
$url = "https://www.teste2.com"; // pego o endereço do site assim ou por $_SERVER["PHP_SELF"]
$url = parse_url($url); //faço com que o PHP saiba que é uma url
$email = "leidson@bol.com.br"; //email válido para teste
//$email = "leidsonbol.com.br";  //email inválido para teste
/*if(filter_var($email, FILTER_VALIDATE_EMAIL) ){
		echo "O email $email é válido";
	}else{
		echo "O valor $email não  é um email válido";
	} */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste2</title>
</head>
<body>
<p>
	<?php 
	if(isset($url)){
  		 echo "Esse site usa o protocolo ".  $url["scheme"] . "<br/>";
	}
	 ?>
	Para redirecionar o usuário é preciso usar o comando header('Location : http://www.google.com'); , porem ele 
	é um comando de meta que não funciona se já tiver qualquer outro elemento php na página. <a href="redirect.php">  Teste aqui </a> <br/>	
</p>
<form action="emailfilter.php" method="get">
	<p>Para testar se um campo é um email é usado o filter_var($valor , FILTER_VALIDATE_EMAIL).</p>
	<input type="text" name="email" placeholder="exemplo@exemplo.com" required>
	<button type=submit>Enviar</button>
</form>
</body>
</html>