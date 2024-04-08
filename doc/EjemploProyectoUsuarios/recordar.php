<?php
$conne=mysqli_connect("localhost", "sonia", "papallona","Usuarios") or die("problemas en la conexión");
//la variable conexión

$sql="select * from datos usuarios where usuario='$_REQUEST[fusuario]' and email='$_REQUEST[femail]'";

$registros=mysqli_query($conne,$sql)or die ("problemas en el select:".mysqli_error($conne));

if($reg=mysqli_fetch_array($registros))
{    echo "Su contraseña es:".$reg['contra'];}
	
else {  echo "Usted no está registrado...";}

 


mysqli_close( $conne);
//cerramos conexión



?>