<?php 
$pessoas = array(
            array("Leidson",  "27", "Programador"),            
            array("Elclides", "30", "Engenheiro"),
            array("Roberval", "37", "Pedreiro"),
            array("Agnaldo", "18", "Vendedor")           
            
            );
            
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste 3</title>
</head>
<body>
<h3>Tabela com dados do array</h3>
<table>
<tr>
	<th>Nome</th> <th>Idade</th> <th>Profissão</th>	
</tr>	

<?php 
	for($i = 0; $i < count($pessoas); $i++){
		echo "<tr>";
		for($j = 0; $j < 3; $j++){
			echo "<td> ".$pessoas[$i][$j] ."</td>";
		}
		echo "</tr>";
	}	
 ?> 
 </table>

 <h3>Imprimindo o código fonte do site https://www.w3schools.com/default.asp</h3>
 <?php 
 $source = file_get_contents("https://www.w3schools.com/default.asp");
 //retorna todo conteúdo do site
 echo htmlentities($source); 
 ?>

 <h3>O arquivo desafios.php foi modificado pela última vez em :</h3>

 <?php 
 $filename = "../desafios.php";
 if(file_exists($filename)){
 	echo "O $filename foi modificado em ". date("F D d Y H:i:s.", filemtime($filename));
 }
 else{
 	echo "Arquivo não encontrado";
 }

  ?>
</body>
</html> 