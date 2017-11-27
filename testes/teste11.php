<?php 
function showArray(){
	$numbers  = [1,2,3,4,5];
	var_dump($numbers);
	echo "<br/>";
	//removendo o 3° item
	unset($numbers[2]);	
	//reorganizando o array
	$numbers = array_values($numbers);
	var_dump($numbers);
	echo "<br/>";
}

function showFirtsArrayItem(){
	echo "Array do Exercício 2  <br/>";
	$colors = array(4 => 'white', 6 => 'green', 11=> 'red');
	var_dump($colors);
	echo "<br/>";
	echo "Para pegar o primeiro item use reset(array) ou array_values(array) e depois array[0]. <br/>";
	/* reorganizando os indices tem um jeito
	$colors = array_values($colors);	
	echo  $colors[0]; */
	//ou usando a função reset que pega o primeiro valor
	echo "Primeiro item do array é :". reset($colors);
	echo "<br/>";
}

function showJsonString(){
	$jsonObj =  '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }} ';
	$newObj = json_decode($jsonObj);
	//var_dump($newObj);
	echo "O Título: ". $newObj->Title . "<br/>";
	echo "O Author: ". $newObj->Author . "<br/>";
	echo "A Publisher: ". $newObj->Detail->Publisher .  "<br/>"; 

}

function insertInArray(int $i, $value){
	$numbers = array(1 , 2 , 3  ,4 ,5, 6 );
	foreach ($numbers as $key => $number) {
		echo $key . " => ". $number . "<br/>";
	}
	echo "<br/>";
	array_splice($numbers, $i,0, $value );
	foreach ($numbers as $key => $number) {
		echo $key . " => ". $number . "<br/>";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste 11</title>
</head>
<body>

<h3>Removendo um item do array e corrigindo o indice</h3>
<p>
	<?php 	showArray(); ?>
</p>

<h3>Mostrando o Primeiro item de um array com indices faltando</h3>
<p>
	<?php showFirtsArrayItem();	 ?>
</p>

<h3>Decodificando um Json.</h3>
<p> 
	<?php showJsonString(); ?>
</p>

<h3>Inserindo um item em qualquer posição no array</h3>
<p>
	5° item valor "teste". <br/>
	<?php insertInArray(4, "teste"); ?>
</p>
</body>
</html>