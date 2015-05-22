<?php 
	include("conectar.php");
	$con=conectar();

		$id=$_GET['id'];{

	$query="UPDATE elementos SET nombre='$text' WHERE id='$id'";
	
	$dato=mysql_query($query,$con);

	if(!$dato){
		echo "No se modificaron los datos";
	}else{
		header("location: index.php");
	}
	}
?>