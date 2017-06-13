<!DOCTYPE html>
<html lang="en-US">
  <head>
    <link rel="stylesheet" href="css_1.css">
    <link rel="stylesheet" href="stylesheet_upperbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Connection Page</title>
  </head>
  <body>
    <?php
    $servername="localhost";
    $username="";
    $password="";
    $dbname="education_portal";
    $dbname_fail="abcd";
   
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
      echo "Couldn't Connect to Database " . $e->getMessage();
      echo "</body>\n";
      echo "</html>";
    }
    ?>
    <header>
      <ul class="uppertab">
        <li><a href="#home">Home</a></li>
        <li><a href="#Colleges">Colleges</a></li>
        <li><a href="#Examinations">Examinations</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    <header>

    <section style="float:left;">
      Hello World!
    </section>

    <section>
      <form action="" method="post">
        <select name="State">
        <option value="Select-State">--Select State--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT state FROM region");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[state] . "value=" . $row[state] . ">" . $row[state] . "</option>" . "\n";
        }
        ?>
        </select>
        <select name="District">
        <option value="Select-District">--Select District--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT district FROM region");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[state] . "value=" . $row[state] . ">" . $row[state] . "</option>" . "\n";
        }
        ?>
        </select>
        <select name="University">
        <option value="Select-University">--Select University--</option>
        <?php
        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT DISTINCT univ FROM college");
        $stmt->execute();

        $data = $stmt->fetchAll();
  
        foreach($data as $row) {
          echo "<option name=" . $row[univ] . "value=" . $row[univ] . ">" . $row[univ] . "</option>" . "\n";
        }
        ?>
        </select>
        <select name="College">
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
        </select>
        <select name="Course">
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
        </select>
  </body>
</html>
