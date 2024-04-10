<?php
// Include database connection file
include_once("config.php");

if( isset($_POST['update']) )
{	
	// Retrieve record values
	$name  = $_POST['name'];
	$age   = $_POST['age'];
	$email = $_POST['email'];	

	$nameErr = $ageErr = $emailErr = "";
	
	// Check for empty fields
	if( empty($name) || empty($age) || empty($email) ) {
          if(empty($name)) {
            $nameErr = "* required";
          }
          if(empty($age)) {
            $ageErr = "* required";
          }
          if(empty($email)) {
            $emailErr = "* required";
          }		
        } 
        else {	
	  // Insert new contact
          $stmt = $pdo->prepare("INSERT INTO contacts (name,age,email) VALUES(?, ?, ?)");
          $stmt->execute([$name, $age, $email]);
          
          // Redirect to home page (index.php)
          header("Location: index.php");
        }
}
else if ( isset($_POST['cancel']) ) {
  // Redirect to home page (index.php)
  header("Location: index.php");
}
?>
