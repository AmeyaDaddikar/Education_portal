<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
  $q = $_GET['q'];
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
  echo '<select id="district" , name="dist", onchange="dynamicDistrict(this.value)" required>' . '\n';
  echo '<option value="">--Select District--</option>';
  $sql = "SELECT * FROM region WHERE state = '".$q."'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll();
  foreach($data as $row) {
          echo "<option name=" . $row[district] . "value=" . $row[district] . ">" . $row[district] . "</option>" . "\n";
  }
  echo "</select>";
  $conn = null;
  ?>
</body>
</html>
