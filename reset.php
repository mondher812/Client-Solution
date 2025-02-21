
<?php
$server = "localhost";
$username = "hi";
$password = "hello";
$dbname = "IB";

$con = new mysqli($server, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{
  
}


$sql = " UPDATE `DAY` SET `Assigned`='0' WHERE 1";
if (mysqli_query($con, $sql)) {
    
   }


$sql2 = "DELETE FROM `assign` ";
if (mysqli_query($con, $sql2)) {
 
   }


$sql = " UPDATE `meals` SET `Assigned`='0' WHERE 1";
if (mysqli_query($con, $sql)) {
  
   }

   echo '<script>location.href="Meal-page.php";</script>';

