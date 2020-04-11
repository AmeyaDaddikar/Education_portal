<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-scale=1.0">

<link rel="icon" type="image/png" href="../media/img/site_icon.ico" >
<link rel="stylesheet" href="../css/stylesheet_basic.css">
<link rel="stylesheet" href="../css/notif_style.css">
<style>
.title {	position:relative; top: 190px; width:50%; margin:auto;height: auto; padding: 100px;
		font-weight:bold; text-shadow: 0px 1px #c65353; color:white;
		font-size:100px; padding:14px; background:#d27979;border-radius:50px;
		box-shadow: 4px 4px 4px 4px #732626; text-shadow: 6px 4px #732626;
	}
label { color: #cc0000; font-variant:small-caps; font-family: verdana; font-style:bold; font-size: 20px; text-shadow: 1.2px 1.2px #ff6666;}

.text {color:#cc6666;font-style:italic; font-size:21px; padding:10px;}

input[type=text],textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ff9999;
    border-radius: 4px;
    background-color: #fff4f4;
    color:grey;
    font-family:verdana;
    font-size:18px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #ff6666;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #ff4d4d;
}
</style>
</head>

<body>
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


	<div class="tab" style="top:0px;">
	<ul >
		<li class="logo">E-PORTAL</li>
  		<li><a href="../html/homepage2.html">Home</a></li>
  		<li><a href="../php/dropdown.php">Colleges</a></li>
  		<li><a href="../php/examinations.php">Examinations</a></li>
  		<li><a href="../php/feedback.php">Feedback</a></li>
	</ul></div>
	
<img src="../media/img/background9.jpg" style="z-index:-1; width:1000px; height:auto;position:absolute;left:140px;top:350px;">


<center><h1 class="title" >Feedback</h1></center>

<div style="width:50%;height:500px;position:absolute; left:100px; top:880px;">
<form action="email.php" type="post">
<p class="text">We at the <b>E-Portal</b> believe that every user experience is vital to undertaking optimal decisions regarding the development of the site.
We are students trying to gain the maximum experience from this project, hence we highly regard constructive critism and to-the-point suggestions.
We apologise for any mistake done from our part, and with your feedback, we look forward to rectify it as soon as possible.
Also, feel free to put forth your ideas so that we can provide the desired facilities to the portal.
<br><center class="text" style="font-size:120%;">Thank you for visiting E-portal</center>
</p><br>
<label for="username">User Name</label></br>
<input type="text" id="username" name="username" value="user"></br>
<textarea id="feedback" name="feedback">Write down your feedback here.</textarea>
</br>
<input type="submit" value="SUBMIT">
</form>
</center>
</div>


<div class="notif" style="position:absolute; top:960px; right:65px;">
<h1>NOTIFICATIONS</h1>
<hr>
<p style="font-size:120%; position:relative; top:-45px; height:100%; color:#d98c8c;">
<i><marquee behavior=scroll scrollamount="6" height=240 direction=up>
WELCOME TO THE PORTAL
</marquee></i>
</p>
</div>

<div class="tab" style="top:1500px;">
<ul>
  		<li><a href="../html/contactus.html">Contact Us</a></li>
		<li><a href="../html/terms&conditions.html">Terms & Conditions</a></li>
</ul>
</div>
<?php
	$conn = null;
?>
</body>
</html>
