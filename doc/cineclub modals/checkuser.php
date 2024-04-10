<?php

// Conecto amb la base de dades
//
$dsn = "mysql:host=127.0.0.1;dbname=cineclub;charset=utf8mb4";

$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
];


try {
  $pdo = new PDO($dsn, "user", "user", $options);
} 
catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something bad happened'); 
}

// defineixo la classe reduit per no se què
//
class reduit {
  public $idMembre;
  public $pass;
  public $email;
}


// asigno el valor que he rebut per el formulari a cadascuna de les variables

$mail = $_POST["accemail"];
$pass = $_POST["accpassword"];

// formo una busca del usuari i ha de retornar el id del usuari si es que existeix
//

$stringA = "SELECT idMembre FROM Membres WHERE email='$mail' AND pass='$pass'";
$membres = $pdo->query( $stringA )->fetchAll(PDO::FETCH_CLASS, 'reduit');

?>
<!DOCTYPE hmtl>
<html lang="en">

  <body>

<?php 


if( $membres ){
  echo "Hola persona fantabulàstica. Endavant";
}
else {
  echo "puto accesss denegat imbecil";
}

// print_r( $membres ); 

?>


  <body>

<html>
