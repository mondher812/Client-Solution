

<!DOCTYPE html>
<html lang="en">
<body style="background-color:rgba(0, 136, 255, 0.344);">
    <form action="assing.html" method="post" enctype="multipart/form-data">
            <input type="submit" class="button"  value=" return">
        </form>

<?php

$server = "localhost";
$username = "hi";
$password = "hello";
$dbname = "IB";

$con = new mysqli($server, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }


$sql= mysqli_query($con,'select meal from past');
$check =mysqli_num_rows($sql);

$weeks = $check/7;

$sql= "SELECT meal, day from PAST";
$storeArray = Array();
$storesArray = Array();
$resulttest = $con->query($sql);

while ($rows = $resulttest->fetch_assoc()) {
    $storesArray[] =  $rows['day'];  
}
$sql= "SELECT meal from PAST";
$resulttest = $con->query($sql);
while ($row = $resulttest->fetch_assoc()) {
    $storeArray[] =  $row['meal'];  
}
$z = 0;
$b = 7;

for ($x = 1; $x<=$weeks; $x++)
{
    echo "<br>";
    echo " week# ";
 
    echo $x;

    for($y=$z;$y<$b;$y++) {
        echo "<br>";
        echo $storeArray[$y];
        echo "  ";
        echo $storesArray[$y];
        echo "<br>";
        
    }
    $z = $z+ 7;
    $b = $b + 7;
}
