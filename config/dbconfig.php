<?php
$con = mysqli_connect("localhost","root","coolking");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"onlinebanking");
?>


<?php
$con = new mysqli("localhost", "root", "coolking", "onlinebanking");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
