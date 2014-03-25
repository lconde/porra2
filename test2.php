<?php
	require "JsonDB.class.php";

	$db = new JsonTable("./data/datos.json"); //parameter => your json file

//	Update
//	$db -> update ( "ID", 1, array("ID" => 1, "Name" => "Fani Zwidawurzn", "Age" => 66));

//	Delete de un registro
//	$db -> delete( "ID", 2 );

//	Inserta nueva apuesta
//	$db -> insert ( array("ID" => 4, "Nombre" => "Roncete", "RMA" => 5, "FCB" => 0));

//	Select *
	$result = $db -> selectAll();

//	Select where nombre
//	$result = $db->select("Nombre","Luisete");

//	Recorre el array resultante de la query
//	foreach($result as $apuesta){

//		$id = $apuesta['ID'];
//		$nombre = $apuesta['Nombre'];
//		$rma = $apuesta['RMA'];
//		$fcb = $apuesta['FCB'];

//		echo "$id $nombre $rma $fcb<br>";		
//	}

	
	echo $result[0]['Nombre'];


//	echo "<pre>";
//	print_r($result);
//	echo "</pre>";

?>
