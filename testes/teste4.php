<!DOCTYPE html>
<html>
<head>
	<title>Teste 4</title>
</head>
<body>
<p>
	PHP Versão: <?php echo phpversion(); ?> <br/>
	Usando o método sleep(int seconds) para atrasar a execução de algo<br/>
	<?php	    
		echo date("h:i:s") . "<br/>";
        sleep(4);
        echo date("h:i:s") . "<br/>";
        echo "Demorou 4seg por calsa do sleep <br/>";
        
	?>
</p>

<p>
	Usando o for para mostrar os valores A01, A02, A03, A04 e A05 da variável $num que tem o valor inicial A00 <br/>
	<?php 
		$num = "A00";

        for ($i=0; $i < 5; $i++) { 
        	echo ++$num . "<br/>";
        }
	?>
	
</p>

</body>
</html>