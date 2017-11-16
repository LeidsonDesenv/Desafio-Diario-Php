<?php 
$navegador = $_SERVER["HTTP_USER_AGENT"];
// getcwd() pega o diretório
$current_file =basename( $_SERVER["PHP_SELF"] );
$url = "http://www.google.com/teste1/resultado";
$url = parse_url($url);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Teste 1</title>
 </head>
 <body>
 <p>
 	<strong>Navegador :</strong>  <?php echo $navegador; ?> <br/>
 	<strong>Diretório Atual com getcwd :</strong> <?php echo getcwd(); ?> <br/>
 	<strong>Diretório Atual  com basename + php self:</strong> <?php echo $current_file ?> <br/>
 	<strong>Sheme :</strong> <?php echo $url['scheme'];  ?> <br/>
 	<strong>Host :</strong> <?php echo $url['host']; ?> <br/>
 	<strong>Path :</strong> <?php echo $url['path']; ?> <br/>

 </p>
 </body>
 </html>