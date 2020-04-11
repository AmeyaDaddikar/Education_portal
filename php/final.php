<!DOCTYPE html>
<html>
<head>
<title>INFO PAGE</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-scale=1.0">

<link rel="icon" type="image/png" href="../media/img/site_icon.ico" >
<link rel="stylesheet" href="../css/stylesheet_basic.css">
<link rel="stylesheet" href="../css/notif_style.css">
<style>
.title {	position:relative; top: 140px; width:50%; margin:auto;height: auto; padding: 100px;
		font-weight:bold; text-shadow: 0px 1px #c65353; color:white;
		font-size:60px; padding:14px; background:#d27979;border-radius:50px;
		box-shadow: 4px 4px 4px 4px #732626; text-shadow: 6px 4px #732626;
	}
div.info {position:absolute; top: 300px; left: 30px; width:60%; height: 850px;background:#cc6666; border-radius: 40px; box-shadow: 4px 4px #993333, -4px -4px white;}
div.info h1 { position: relative; left: 8px;width:90%;padding: 10px; text-shadow:1px 1px #c65353;  color:white; font-size:18px; background-color: #732626; border-radius:12px;box-shadow: 2px 2px 2px 2px white;}
div.info h2 {text-strength:bold;text-transform: uppercase; padding: 12px;color:white;text-shadow:1px 1px #732626;font-size:20px}
div.info a {color:white;font-style:italic; text-transform:none;}
</style>
</head>

<body style="background: radial-gradient(circle,white 30%, #df9f9f);">

<div class="tab" style="top:0px;">
	<ul >
		<li class="logo">E-PORTAL</li>
  		<li><a href="../html/homepage2.html">Home</a></li>
  		<li><a href="../php/dropdown.php">Colleges</a></li>
  		<li><a href="../php/examinations.php">Examinations</a></li>
  		<li><a href="../php/feedback.php">Feedback</a></li>
	</ul></div>

<center><h1 class="title" >College Information</h1></center>

  <?php
if(isset($_GET['submit']))
{
  $district = $_GET['dist'];
  $state = $_GET['state'];
  $col_name = $_GET['clg'];
 // $crs_name = $_GET['course'];
  $uniw = $_GET['universty'];
  
  // echo $q;
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
//echo $district,"<br>",$state;
//echo  $col_name," \n", $crs_name," \n", $uniw;
$sql = "SELECT * FROM college WHERE clg_name = '".$col_name."'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll();
$sq = "SELECT * FROM course WHERE course_id IN (SELECT course_id FROM college_course WHERE clg_id = (SELECT clg_id FROM college WHERE clg_name = '".$col_name."'))";
  $stm = $conn->prepare($sq);
  $stm->execute();
  $dat = $stm->fetchAll();
foreach($data  as $row ) {
        $x= $row['clg_name'];
	$y=$row['addr'] ;
	$z=$row['hostel_capacity'] ;	
        $b=$row['website'];
	$w=$row['contact'] ; 

}


}
else
echo"fail";
?>
<div class="info">
<h1>Name of College</h1>
<h2><?php echo $x ?></h2>
<h1>Address</h1>
<h2><?php echo $y ?></h2>

<h1>Intake</h1>
<h2><?php echo $z ?></h2>

<h1>Website</h1>
<h2><a href="https://<?php echo $b ?>"><?php echo $b ?></a></h2>

<h1>Contact</h1>
<h2><?php echo $w ?></h2>

<h1>Courses</h1>
<h2><?php foreach($dat  as $row ) {
echo $row['course_name']."<br>";}
 ?></h2>


</div>

<div class="notif" style="position:absolute; top:300px; right:40px; background-color:white;">
<h1>NOTIFICATIONS</h1>
<hr>
<p style="font-size:120%; position:relative; top:-45px; height:100%; color:#d98c8c;">
<i><marquee behavior=scroll scrollamount="6" height=240 direction=up>
WELCOME TO THE PORTAL
</marquee></i>
</p>
</div>

<div class="tab" style="top:1200px;">
<ul>
  		<li><a href="../html/contactus.html">Contact Us</a></li>
		<li><a href="../html/terms&conditions.html">Terms & Conditions</a></li>
</ul>
</div>
</body>
</html>
