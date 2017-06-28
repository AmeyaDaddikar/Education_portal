<!DOCTYPE html>
<html>
<head>
  <title>OPTION BAR</title>
  <link rel="stylesheet" href="notif_style.css">
  <link rel="stylesheet" href="stylesheet_basic.css">
  <link rel="icon" type="image/png" href="site_icon.ico" >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <style>
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
  select { width:80%; box-shadow: 2px 4px #ffcccc; font-size: 20px; color:white; background-color: #ffcece; margin:10px; border-radius:10px; border-thickness:2px; border-color:white;}
  option { background-color: white; color: #ffcece;}
  label { color: #cc0000; font-variant:small-caps; font-family: verdana; font-style:bold; font-size: 20px; text-shadow: 1.2px 1.2px #ff6666;}
  input[type=submit] {
      width: 100%;
      background-color: #ff6666;
      color: white;
      padding: 25px 25px;
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
    <header>
	<div class="tab" style="top:0px;">
      <ul>
	<li class="logo">E-PORTAL</li>
        <li><a href="homepage2.html">Home</a></li>
        <li><a href="dropdown.php">Colleges</a></li>
        <li><a href="#Examinations">Examinations</a></li>
        <li><a href="#about">About</a></li>
      </ul>

    </div></header>
<div style="background-color: #f9ecec; margin:auto; width:70%; border-radius:10px; position:absolute; top: 100px; box-shadow: 4px 4px 4px 4px #cc6666;">
<form action="info_page.php"" method="get">



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
<label for="state">State</label><br/>
<select id="state" name="state" onchange="dynamicState(this.value)">
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

</select><br/>
<label for="district">District</label></br>
<div id = "distsec">
<select id="district" name="district" onchange="dynamicDistrict(this.value)">

</select><br/>
</div>
<label for="university">University</label><br/>
<div id = "unisec">
<select id="university" onchange="dynamicUniversity(this.value)">

</select><br/>
<label for="college">College</label><br/>
<div id = "colsec">
<select id="college" onchange="dynamicCollege(this.value)">

</select><br/>

<label for="course">Course</label></br>
<div id = "crssec">
<select id="course">

</select>
</div>
<br />

<input type="submit" value="SUMBIT" >
</center>
</div>

</form></div>

<footer>
<div class="tab" style="top:1500px;">
  <ul>
    <li style="float:right;"><a href="#ContactUS">Contact Us</a></li>
    <li style="float:right;"><a href="#Terms&Conditions">Terms & Conditions</a></li>
  </ul>
</div>
</footer>
<?php
	$conn = null;
?>
</body>
</html>
