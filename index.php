<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ambientes no propietarios</title>
</head>
<body>


<div>
<h1>Ambientes no propietarios </h1>
</div>

<?php

// Arreglos para cada persona
$Persona_1 = ['Carlos','Granda','32'];
$Persona_2 = ['Juan', 'Martinez','31'];
$Persona_3= ['Maria','Jimenez','22'];

// Apertura de la tabla
echo "<table border = 2>";

// Titulos de la tabla
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Edad</th>";
echo "</tr>";

// Primera persona de la tabla
echo "<tr>";
for($i = 0 ; $i <= 2 ; $i++){
	echo "<td> $Persona_1[$i] </td>";	
}
echo "</tr>";

//Segunda persona de la tabla
echo "<tr>";
for($i = 0 ; $i <= 2 ; $i++){
	echo "<td> $Persona_2[$i] </td>";	
}
echo "</tr>";

//Tercera Persona de la tabla
echo "<tr>";
for($i = 0 ; $i <= 2 ; $i++){
	echo "<td> $Persona_3[$i] </td>";	
}
echo "</tr>";

// Cierre de la tabla
echo "</table>";

?>

	
</body>
</html>

