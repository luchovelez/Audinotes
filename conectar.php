<?php
function conectar(){
$user="root";
$pass="password";
$server="localhost";
$db="audinotes";
$con=@mysql_connect($server,$user,$pass) or die ("Error de Conexion");
mysql_select_db($db,$con);
return $con;
}
?>