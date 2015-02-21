<?php
function conectar(){
$user="a6784434_notes";
$pass="Luisvelez87";
$server="mysql5.000webhost.com";
$db="a6784434_notes";
$con=@mysql_connect($server,$user,$pass) or die ("Error de Conexion");
mysql_select_db($db,$con);
return $con;
}
?>