<?php
$conne=mysqli_connect("localhost", "sonia", "papallona","Usuarios") or die("problemas en la conexión");
//la variable conexión

$sql="select * from datosusuarios where contra='$_REQUEST[fcontra]' and usuario='$_REQUEST[fusuario]'";

$registros=mysqli_query($conne,$
) or die ("problemas en el select:".mysqli_error($conne));

if($reg=mysqli_fetch_array($registros))
	{   $sql="delete from datosusuarios where contra='$_REQUEST[fcontra]' and usuario='$_REQUEST[fusuario]'"; 
    mysqli_query($conne,$sql)or die("problemas en el select:".mysqli_error($conne));
	echo"Bye bye se borró correctamente";
}
	else { echo "No existe ese usuario";  }

mysqli_close( $conne);
//cerramos conexión



?>