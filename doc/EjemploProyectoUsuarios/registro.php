<?php
$conne=mysqli_connect("localhost", "sonia", "papallona","Usuarios") or die("problemas en la conexión");
//la variable conexión

$sql=" insert into datosusuarios(email,usuario,contra) values ('$_REQUEST[femail]','$_REQUEST[fusuario]','$_REQUEST[fcontra]')"; 
//la consulta sql con los datos enviados por el formulario

mysqli_query($conne,$sql)or die("problemas en la consulta".mysqli_error($conne)); 
//ejecutar la consulta sql anterior a la conexión
echo "Felicidades se ha registrado correctamente!!!";
mysqli_close( $conne);
//cerramos conexión



?>