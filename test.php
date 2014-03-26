<?php
	require "JsonDB.class.php";
    $db = new JsonTable("./data/datos.json");

	$result = $db -> selectAll();

	// Sacamos el numero de elementos del array resultante de la consulta
	$cont = sizeof($result);
	
  //Creamos los parametros iniciales
  
  $filas = $cont+1;
  $columnas = 3;
  
 ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Test PHP porra RENR</title>
	</head>

 <body>

<!-- Creamos el inicio de la tabla manualmente -->

<table border="1">

<?php

 //Iniciamos el bucle de las filas
 for($t=0;$t<$filas;$t++){
 	echo "<tr>";
	if($t == 0){
		echo "<td style=padding:3px;background-color:#F5D0A9;>"."Nombre"."</td>";
		echo "<td style=padding:3px;background-color:#F5D0A9;>"."Real Madrid C.F."."</td>";
		echo "<td style=padding:3px;background-color:#F5D0A9;>"."F.C. Barcelona"."</td>";
	}else{
  	//Iniciamos el bucle de las columnas
 	for($y=0;$y<$columnas;$y++){
		// Columna 0 = Nombre
		if($y == 0){
			$nombre = $result[$t-1]['Nombre'];			
			echo "<td style=padding:3px;>".$nombre."</td>";
		}
		// Columna 1 = RMA
		if($y == 1){
                        $rma = $result[$t-1]['RMA'];
                        echo "<td style=padding:3px;><center>".$rma."</td>";
                }
		// Columna 2 = FCB
                if($y == 2){
                        $fcb = $result[$t-1]['FCB'];
                        echo "<td style=padding:3px;><center>".$fcb."</td>";
                }
		
	 }
	}
	 //Cerramos columna
	 echo "</tr>";
  }

 ?>

 <!-- Cerramos tabla -->
 </table>

 </body>
 </html>

