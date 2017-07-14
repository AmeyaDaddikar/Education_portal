<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
  $q = $_GET['q'];
  $r = $_GET['r'];
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
  echo '<select id="university" , name="universty" , onchange="dynamicUniversity(this.value)" required>' . '\n';
  echo '<option value="">--Select University--</option>';
  $sql = "SELECT * FROM univ WHERE univ_id IN (SELECT DISTINCT univ_id FROM region_college_univ WHERE rgn_id IN (SELECT rgn_id FROM region WHERE state = '".$q."' AND district = '".$r."'))";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll();
  foreach($data as $row) {
          echo "<option name=" . $row[univ_name] . "value=" . $row[univ_name] . ">" . $row[univ_name] . "</option>" . "\n";
  }
  echo "</select>";
  ?>
</body>
</html>
