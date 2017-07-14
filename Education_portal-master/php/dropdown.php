<!DOCTYPE html>
<html>
<head>
  <title>OPTION BAR</title>
  <link rel="stylesheet" href="../css/notif_style.css">
  <link rel="stylesheet" href="../css/stylesheet_basic.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <style>
#background {
    text-align: center;
    width: 100%; 
    height: 100%; 
    position: fixed;
    left: 0px; 
    top: 100px; 
   background-colour:red;
    z-index: -1;
}

.stretch {
    margin: auto;
    height:100%;
}
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
  select { width:40%;box-shadow: 2px 4px #ffcccc; font-size: 23px; color:white; background-color: #ffcece; margin:10px; border-radius:10px; border-thickness:2px; border-color:white;}
  option { background-color: white; color: #ffcece;}
  label { color:#df9f9f; font-variant:small-caps; font-family: verdana; font-style:bold; font-size: 26px; text-shadow: 1.2px 1.2px #ff6666;}
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
      background-color: #ff4d4d;}
.title {	position:relative; top: 140px; width:50%; margin:auto;height: auto; padding: 100px;
		font-weight:bold; text-shadow: 0px 1px #c65353; color:white;
		font-size:60px; padding:14px; background:#d27979;border-radius:50px;
		box-shadow: 4px 4px 4px 4px #732626; text-shadow: 6px 4px #732626;
	}
.heading {	position:relative; top: 140px; width:50%; margin:auto;height: auto; padding: 100px;
		font-weight:bold; text-shadow: 0px 1px #c65353; color:#df9f9f; border-radius:50px;background:white;
		font-size:30px; padding:14px; box-shadow: 4px 4px 4px 4px #732626; text-shadow: 1px 1px #732626;
	}
div.info {position:absolute; top: 300px; left: 30px; width:60%; height: 750px;background:#cc6666; border-radius: 40px; box-shadow: 4px 4px #993333, -4px -4px white;}
div.info h1 { position: relative; left: 8px;width:90%;padding: 10px; text-shadow:1px 1px #c65353;  color:white; font-size:18px; background-color: #732626; border-radius:12px;box-shadow: 2px 2px 2px 2px white;}
div.info h2 {text-strength:bold;text-transform: uppercase; padding: 12px;color:white;text-shadow:1px 1px #732626;font-size:20px}
div.info a {color:white;font-style:italic; text-transform:none;}

</style>
</head>
<body>
<div>
<header>

<div class="tab" style="top:0px;">
      <ul >
	<li class="logo">E-PORTAL</li>
        <li><a href="../html/homepage2.html">Home</a></li>
        <li><a href="javascript:window.location.reload()">Colleges</a></li>
        <li><a href="../php/examinations.php">Examinations</a></li>
        <li><a href="../php/feedback.php">Feedback</a></li>
      </ul></div>
    </header>
<!--<img src="../media/img/college-lbc-final.jpg" style="z-index:-1; width:98%; height:auto; margin:auto; position:absolute; top:80px;">
-->
<center><h1 class="heading" >Please fill up the form to find the information regarding the desired college</h1></center>


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
    
<form action="final.php" method="get">

<div style="position:relative; top:50px; right: -3px;border: solid 4px #df9f9f;margin-top:150px; width:60%; height:auto; border-radius:10px;background:white;">

<!--
<label for="fname">First Name</label></br>
<input type="text" id="fname"></br>
<label for="lname">Last Name</label></br>
<input type="text" id="lname"></br>
-->
    <script>
    function dynamicState(stateValue) {
	    var distSec = document.getElementById("distsec");
	    while(distSec.hasChildNodes()) {
		    distSec.removeChild(distSec.lastChild);
	    }
	    var xhttp;
	    if(stateValue == "") {
		    // alert("State Empty");
		    var distSelect = document.createElement('select');
		    var distOption = document.createElement('option');
		    var distText = document.createTextNode("--Select District--");
		    distOption.appendChild(distText);
		    distSelect.appendChild(distOption);
		    var distAtt = document.createAttribute("value");
		    distAtt.value = "";
		    distSelect.firstChild.setAttributeNode(distAtt);
		    distSec.appendChild(distSelect);
		    return;
	    }
	    else {
		    /*
		    var distOption2 = document.createElement('option');
		    var distText2 = document.createTextNode("A District");
		    distOption2.appendChild(distText2);
		    var distAtt2 = document.createAttribute("value");
		    distAtt2.value = "1";
		    distOption2.setAttributeNode(distAtt2);
		    dist.appendChild(distOption2);
		    */
		    xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		    	if(this.readyState == 4 && this.status == 200) {
				distSec.innerHTML = this.responseText;
			}
		    };
		    xhttp.open("GET", "getdist.php?q="+stateValue, true);
		    xhttp.send();
	    }
    }
    function dynamicDistrict(distValue) {
	    var uniSec = document.getElementById("unisec");
	    while(uniSec.hasChildNodes()) {
		    uniSec.removeChild(uniSec.lastChild);
	    }
	    var xhttp;
	    if(distValue == "") {
		    // alert("State Empty");
		    var uniSelect = document.createElement('select');
		    var uniOption = document.createElement('option');
		    var uniText = document.createTextNode("--Select District--");
		    uniOption.appendChild(uniText);
		    uniSelect.appendChild(uniOption);
		    var uniAtt = document.createAttribute("value");
		    uniAtt.value = "";
		    uniSelect.firstChild.setAttributeNode(uniAtt);
		    uniSec.appendChild(uniSelect);
		    return;
	    }
	    else {
		    var st = document.getElementById("state");
		    var stateIndex = st.selectedIndex;
		    // alert(st.options[stateIndex].value);
		    var stateValue = st.options[stateIndex].value;
		    /*
		    var distOption2 = document.createElement('option');
		    var distText2 = document.createTextNode("A District");
		    distOption2.appendChild(distText2);
		    var distAtt2 = document.createAttribute("value");
		    distAtt2.value = "1";
		    distOption2.setAttributeNode(distAtt2);
		    dist.appendChild(distOption2);
		    */
		    xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		    	if(this.readyState == 4 && this.status == 200) {
				uniSec.innerHTML = this.responseText;
			}
		    };
		    xhttp.open("GET", "getuni.php?q="+stateValue+"&r="+distValue, true);
		    xhttp.send();
	    }
    }
    function dynamicUniversity(uniValue) {
	    var colSec = document.getElementById("colsec");
	    while(colSec.hasChildNodes()) {
		    colSec.removeChild(colSec.lastChild);
	    }
	    var xhttp;
	    if(uniValue == "") {
		    // alert("State Empty");
		    var colSelect = document.createElement('select');
		    var colOption = document.createElement('option');
		    var colText = document.createTextNode("--Select District--");
		    colOption.appendChild(colText);
		    colSelect.appendChild(colOption);
		    var colAtt = document.createAttribute("value");
		    colAtt.value = "";
		    colSelect.firstChild.setAttributeNode(colAtt);
		    colSec.appendChild(colSelect);
		    return;
	    }
	    else {
		    var st = document.getElementById("state");
		    var stateIndex = st.selectedIndex;
		    // alert(st.options[stateIndex].value);
		    var stateValue = st.options[stateIndex].value;
		    var dt = document.getElementById("district");
		    var distIndex = dt.selectedIndex;
		    // alert(dt.options[distIndex].value);
		    var distValue = dt.options[distIndex].value;
		    /*
		    var distOption2 = document.createElement('option');
		    var distText2 = document.createTextNode("A District");
		    distOption2.appendChild(distText2);
		    var distAtt2 = document.createAttribute("value");
		    distAtt2.value = "1";
		    distOption2.setAttributeNode(distAtt2);
		    dist.appendChild(distOption2);
		    */
		    xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		    	if(this.readyState == 4 && this.status == 200) {
				colSec.innerHTML = this.responseText;
			}
		    };
		    xhttp.open("GET", "getcol.php?q="+stateValue+"&r="+distValue+"&s="+uniValue, true);
		    xhttp.send();
	    }
    }
    function dynamicCollege(colValue) {
	    var crsSec = document.getElementById("crssec");
	    while(crsSec.hasChildNodes()) {
		    crsSec.removeChild(crsSec.lastChild);
	    }
	    var xhttp;
	    if(colValue == "") {
		    // alert("State Empty");
		    var crsSelect = document.createElement('select');
		    var crsOption = document.createElement('option');
		    var crsText = document.createTextNode("--Select District--");
		    crsOption.appendChild(crsText);
		    crsSelect.appendChild(crsOption);
		    var crsAtt = document.createAttribute("value");
		    crsAtt.value = "";
		    crsSelect.firstChild.setAttributeNode(crsAtt);
		    crsSec.appendChild(crsSelect);
		    return;
	    }
	    else {
		    /*
		    var st = document.getElementById("state");
		    var stateIndex = st.selectedIndex;
		    // alert(st.options[stateIndex].value);
		    var stateValue = st.options[stateIndex].value;
		    var dt = document.getElementById("district");
		    var distIndex = dt.selectedIndex;
		    // alert(dt.options[distIndex].value);
		    var distValue = dt.options[distIndex].value;
		    var ut = document.getElementById("university");
		    var uniIndex = ut.selectedIndex;
		    // alert(ut.options[uniIndex].value);
		    var uniValue = ut.options[uniIndex].value;
		    */
		    /*
		    var distOption2 = document.createElement('option');
		    var distText2 = document.createTextNode("A District");
		    distOption2.appendChild(distText2);
		    var distAtt2 = document.createAttribute("value");
		    distAtt2.value = "1";
		    distOption2.setAttributeNode(distAtt2);
		    dist.appendChild(distOption2);
		    */
		    xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		    	if(this.readyState == 4 && this.status == 200) {
				crsSec.innerHTML = this.responseText;
			}
		    };
		    xhttp.open("GET", "getcrs.php?q="+colValue, true);
		    xhttp.send();
	    }
    }
    
    </script>
<center>
<label for="state">State<br></label>
<select id="state" name="state" onchange="dynamicState(this.value)" required>
        <option value="">--Select State--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT state FROM region");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[state] . "value=" . $row[state] . ">" . $row[state] . "</option>" . "\n";
        }
        ?>
<!--
<option value="1">Option 1</option>
<option value="2">Option 2</option>
<option value="3">Option 3</option>
<option value="4">Option 4</option>
<option value="5">Option 5</option>
<option value="6">Option 6</option>
-->
</select>
<label for="district"><br>District</label>
<div id = "distsec">
<select id="district" name="district" onchange="dynamicDistrict(this.value)" required>
<!--
        <option value="Select-District">--Select District--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT district FROM region");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[district] . "value=" . $row[district] . ">" . $row[district] . "</option>" . "\n";
        }
        ?>
-->
<!--
<option value="1">Option 1</option>
<option value="2">Option 2</option>
<option value="3">Option 3</option>
<option value="4">Option 4</option>
<option value="5">Option 5</option>
<option value="6">Option 6</option>
-->
</select></br>
</div>
<label for="university">University</label>
<div id = "unisec">
<select id="university" , name="university", onchange="dynamicUniversity(this.value)" required>
<!--
        <option value="Select-University">--Select University--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT univ_name FROM univ");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[univ_name] . "value=" . $row[univ_name] . ">" . $row[univ_name] . "</option>" . "\n";
        }
        ?>
-->
<!--
<option value="1">Option 1</option>
<option value="2">Option 2</option>
<option value="3">Option 3</option>
<option value="4">Option 4</option>
<option value="5">Option 5</option>
<option value="6">Option 6</option>
-->
</select>
</div>
<label for="college">College</label>
<div id = "colsec">
<select id="college" onchange="dynamicCollege(this.value)" required>
<!--
        <option value="Select-College">--Select College--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT clg_name FROM college");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[clg_name] . "value=" . $row[clg_name] . ">" . $row[clg_name] . "</option>" . "\n";
        }
        ?>
-->
<!--
<option value="1">Option 1</option>
<option value="2">Option 2</option>
<option value="3">Option 3</option>
<option value="4">Option 4</option>
<option value="5">Option 5</option>
<option value="6">Option 6</option>
-->
</select>
</div>
<!--<label for="course">Course</label>
<div id = "crssec">
<select id="course">
<!--
        <option value="Select-Course">--Select Course--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT course_name FROM course");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[course_name] . "value=" . $row[course_name] . ">" . $row[course_name] . "</option>" . "\n";
        }
        ?>
-->
<!--
<option value="1">Option 1</option>
<option value="2">Option 2</option>
<option value="3">Option 3</option>
<option value="4">Option 4</option>
<option value="5">Option 5</option>
<option value="6">Option 6</option>
-->
</select>
</div>
<br />
<!--
<textarea>Write additional comments here.</textarea>
</br>
-->
<br><br>
<input type="submit" name='submit' style="width:60%" value="SUBMIT">
</center>

</div>
</form>

<div class="notif" style="position:absolute; top:300px; right:65px;background-color:white;">
<h1>NOTIFICATIONS</h1>
<hr>
<p style="font-size:120%; position:relative; top:-45px; height:100%; color:#d98c8c;">
<i><marquee behavior=scroll scrollamount="6" height=240 direction=up>
WELCOME TO THE PORTAL
</marquee></i>
</p>
</div>
<footer>
<div class="tab"x style="top:800px" >
  <ul class="tab">
    <li style="float:left;"><a href="../html/contactus.html">Contact Us</a></li>
    <li style="float:left;"><a href="../html/terms&conditions.html">Terms & Conditions</a></li>
  </ul>
</div>

</footer>
<?php
	$conn = null;
	//include('homepage2.html');
?>
</div>
</body>
</html>
