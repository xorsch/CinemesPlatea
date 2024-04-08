<?php
$conne=mysqli_connect("localhost", "sonia", "papallona","Usuarios") or die("problemas en la conexión");
//la variable conexión

$sql="select * from datosusuarios where email='$_REQUEST[femail]'";

$registros=mysqli_query($conne,$sql)or die("problemas en la consulta".mysqli_error($conne));

if($reg=mysqli_fetch_array($registros))
{   
$sql="update datosusuarios set contra= '$_REQUEST[fcontra]' where email='$_REQUEST[femail]'";

mysqli_query($conne,$sql)or die("problemas en la consulta:".mysqli_error($conne));

echo "La actualización se ha efectuado correctamente";
}
else {   echo "No existe tal usuario con ese email"; }

mysqli_close( $conne);
//cerramos conexión

?>