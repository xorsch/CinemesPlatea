<?php

  include_once( "config.php" );

  // Retrieve record values
  $tUser = $_POST['logemail'];
  $tPass = $_POST['logpass'];

  $userErr = $passErri = "";

  echo $tUser;
  echo $tPass;
  // Check for empty fields
  if( empty($tUser) || empty($tPass) ) {
    if( empty($tUser) ) {
      $userErr = "* required";
    }
    if( empty($tPass) ) {
      $passErr = "* required";
    }
  }

  class Membres {
    public $idMembre;
    public $pass;
    public $nom;
    public $cognom;
    public $email;
    public $adreca;
    public $telefon;
  }

  // Fetch contacts (in descending order)
  $temp = $pdo->query( "SELECT * FROM Membres WHERE email='laia@gmail.com' AND pass='1234'")->fetchAll(PDO::FETCH_CLASS, 'Membres');
  
  if( $temp ){
    print_r( $temp );
  }
  else {
    echo "No ho he trobat";
  }

?>
<html>
<body>
<h1>Merda</h1>
<?php

  echo $tUser;
  echo $tPass;

  print_r( $tUser );
  print_r( $tpass );

?>

</body>
</html>
