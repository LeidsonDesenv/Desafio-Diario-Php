<?php 
function showColorList(){
	$colors = ['preto','azul', 'verde', 'vermelho', 'roxo', 'rosa'];

	echo "<ol>";
	foreach ($colors as $color) {
		echo "<li> $color </li>";		
	}
	echo "</ol>";
}

function showCountries(){
	$ceu = array( "Italy"=>"Rome",
	  "Luxembourg"=>"Luxembourg",
	   "Belgium"=> "Brussels", 
	   "Denmark"=>"Copenhagen",
	    "Finland"=>"Helsinki",
	    "France" => "Paris", 
	    "Slovakia"=>"Bratislava",
	    "Slovenia"=>"Ljubljana",
	    "Germany" => "Berlin", 
	    "Greece" => "Athens", 
	    "Ireland"=>"Dublin",
	    "Netherlands"=>"Amsterdam", 
	    "Portugal"=>"Lisbon", 
	    "Spain"=>"Madrid",
	    "Sweden"=>"Stockholm",
	    "United Kingdom"=>"London",
	    "Cyprus"=>"Nicosia", 
	    "Lithuania"=>"Vilnius",
	    "Czech Republic"=>"Prague",
	    "Estonia"=>"Tallin",
	    "Hungary"=>"Budapest",
	    "Latvia"=>"Riga",
	    "Malta"=>"Valetta",
	    "Austria" => "Vienna",
	    "Poland"=>"Warsaw") ;
	//ordena um array associativo pelo seu valor
	asort($ceu);
	//ordenar um arrau associativo pela key
	//ksort($ceu);
	
	foreach ($ceu as $key => $capital) {
		echo "<p><strong>País:</strong> ". $key . "<br/><strong>Capital:</strong> ". $capital. " </p>";
	}
	
}

	$colors = ['white', 'green', 'red', 'blue', 'black'];
	$texto = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Teste 10</title>
</head>
<body>
<p>
<?php 
	echo "Lista ordenada <br/>";
	showColorList();
	echo "<br/>" . $texto;
 ?>
 </p>
 <p>
 	<?php showCountries(); ?>
 </p>
</body>
</html>