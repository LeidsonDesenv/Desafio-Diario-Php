<?php 

$email = isset($_GET["email"]) ? $_GET["email"] : "";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "O email é valido";
}
else{
	echo "Esse email não é valido, tente no formato exemplo@exemplo.com";
}


 ?>