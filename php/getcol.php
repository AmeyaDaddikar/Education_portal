<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
  $q = $_GET['q'];
  $r = $_GET['r'];
  $s = $_GET['s'];
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
  echo '<select id="college" , name="clg", onchange="dynamicCollege(this.value)" required>' . '\n';
  echo '<option value="">--Select College--</option>';
  $sql = "SELECT * FROM college WHERE clg_id IN (SELECT clg_id FROM region_college_univ WHERE rgn_id IN (SELECT rgn_id FROM region WHERE state = '".$q."' AND district = '".$r."') AND univ_id = (SELECT univ_id FROM univ WHERE univ_name = '".$s."'))";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll();
  foreach($data as $row) {
          echo "<option name=" . $row[clg_name] . "value=" . $row[clg_name] . ">" . $row[clg_name] . "</option>" . "\n";
  }
  echo "</select>";
  $conn = null;
  ?>
</body>
</html>
