<?php
include("conectar.php");
$con=conectar();

if(isset($_REQUEST['enviar'])){

	$text=$_REQUEST['texto'];



	$query="insert into elementos (nombre) values ('$text')";

	$dato=mysql_query($query,$con);

	if(!$dato){
		echo "No se Insertaron los datos";
	}else{
		header("location: index.php");
	}
}
?>
