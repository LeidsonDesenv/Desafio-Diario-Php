<?php 
function sortArrayManyTimes(){
	$yearsOld = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	asort($yearsOld);
	echo "<p>";
		echo "asort - ordenando ascendete pelo valor <br/>";
		foreach ($yearsOld as $key => $year) {
			echo "Pessoa ". $key . " Idade". $year. "<br/>";
		}
	echo "</p>";

	echo "<p>";
		ksort($yearsOld);
		echo "ksort - ordenando ascendente pela chave <br/>";
		foreach ($yearsOld as $key => $year) {
			echo "Pessoa ". $key . " Idade". $year. "<br/>";
		}
	echo "</p>";

	echo "<p>";
		echo "arsort - ordenando descendente por valor <br/>";
		arsort($yearsOld);
		foreach ($yearsOld as $key => $year) {
			echo "Pessoa ". $key . " Idade". $year. "<br/>";
		}
	echo "</p>";

	echo "<p>";
		echo "krsort - ordenando descendente pela chave <br/>";
		foreach ($yearsOld as $key => $year) {
			echo "Pessoa ". $key . " Idade". $year. "<br/>";
		}
	echo "</p>";

}

function getTemp(){
	$temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
	$avg = array_sum($temps) / count($temps);
	
	sort($temps);
	$greater = "";
	$lower = "";
	for ($i=0; $i < 7; $i++) { 
		$lower .= $temps[$i] . ",";
	}
	for ($i= (count($temps) - 7); $i < count($temps) ; $i++) { 
	  $greater.= $temps[$i] . ",";	
	}
	echo "A média de temperatura é ". $avg;
	echo "<br/>";
	echo "As maiores temperaturas são " .$greater;
	echo "<br/>";
	echo "As menores  temperaturas são " .$lower;
}

$colors = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function modifyToCase($list, $case){
	
	if(is_array($list)){
		if($case == "Upper"){
			foreach ($list as $key => $item) {
				$list[$key] = strtoupper($item);
			}
		}else if($case == "Lower"){
			foreach ($list as $key => $item) {
				$list[$key] = strtolower($item);
			}
		}
		foreach ($list as $key => $item) {
			echo $item . "<br/>";
		}
		echo "<br/>";
	}
}

function showDivisiveByFour($start, $end){
	$result = "";
	for ($i= $start; $i <= $end ; $i++) { 
		if($i % 4 == 0){
			$result .= $i . ",";
		}
	}
	$result = substr($result, 0, strlen($result) - 1);
	echo $result;
	echo "<br/>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste 12</title>
</head>
<body>
<h3>Ordenando Arrays Associativos</h3>
<p>
	<?php sortArrayManyTimes(); ?>
</p>
<h3>Calculando a Média e retornando os 7 maiores e menores</h3>
<p>
	<?php getTemp(); ?>
</p>

<h3>Mudando a apresentação do conteúdo do array</h3>
<p>
	<?php
	var_dump($colors);
	echo "<br/>";
	modifyToCase($colors, "Upper"); 
	modifyToCase($colors, "Lower"); 
	?>
</p>

<h3>Verificando quais valores são divisiveis por 4 em um intervalo</h3>
<p>
	Nesse caso 200 a 250 <br/>
	<?php showDivisiveByFour(200,250); 
	echo "Entre 100 e 200 <br/>";
	showDivisiveByFour(100,200); 
	?>

</p>
</body>
</html>