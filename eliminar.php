<?php 
	include("conectar.php");
	$con=conectar();

	$id=$_GET['id'];{
	
	$query="DELETE FROM elementos WHERE id='$id'";
	
	$dato=mysql_query($query,$con);

	if(!$dato){
		echo "No se Insertaron los datos";
	}else{
		header("location: index.php");
	}
	}
?>