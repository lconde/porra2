<?php 

	// Extraemos la apuesta de un apostante

	require "JsonDB.class.php";
	$db = new JsonTable("./data/datos.json");

	//Cogemos el parametro nombre
	$nombreApostante = $_POST['nombre'];

	//	Select where nombre
	$result = $db->select("Nombre",$nombreApostante);

	//Mostramos el resultado de la consulta
	$resultado = $result[0]['Nombre']." = ".$result[0]['RMA']." - ".$result[0]['FCB'];
	
	echo $resultado;
?>

