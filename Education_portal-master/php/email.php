<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="educational_portal";
    $dbname_fail="abcd";
   
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully!" ;
    }
    catch(PDOException $e) {
      echo "Couldn't Connect to Database " . $e->getMessage();
    }
   
    ?>	
<?php
	$user  =  $_POST["username"];
	$user  = str_replace("\n.", "\n..", $user);
	
	$fback =  $_POST["feedback"];
	$fback = str_replace("\n.", "\n..", $fback);
	$fback = wordwrap($fback,70);
	
	mail("ameyadaddikar@gmail.com","Feedback from user",$fback);
header("Location: feedback.php");


?>
<!DOCTYPE html>
<html></html>
