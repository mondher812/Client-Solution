<!DOCTYPE html>
<html lang="en">
<body style="background-color:rgba(0, 136, 255, 0.344);">
    <form action="assing.html" method="post" enctype="multipart/form-data">
            <input type="submit" class="button"  value=" return">
        </form>
 <?php

session_start();

$server = "localhost";
$username = "hi";
$password = "hello";
$dbname = "IB";

$con = new mysqli($server, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else
  {
    
  }

$sql = "SELECT meal, category FROM meals";
$test = $con->query ($sql);
$meal = mysqli_fetch_all($test, MYSQLI_ASSOC);

$test = $con->query($sql);

$sql= mysqli_query($con,'select * from meals');
$check=mysqli_num_rows($sql);

$options=array();
for($i=0;$i<$check;$i++){
    array_push($options,$i);
}
shuffle($options);

$sql = "SELECT meal, category FROM meals";
$test = $con->query ($sql);
$meal = mysqli_fetch_all($test, MYSQLI_ASSOC);


$sundaymeal = $options[0];
$mondaymeal = $options[1];
 $tuesdaymeal = $options[2]; 
 $wednesdaymeal = $options[3];
  $thursdaymeal = $options[4]; 
  $fridaymeal = $options[5]; 
   $saturdaymeal = $options[6];
   
   $name = $meal [$sundaymeal] ['meal'];
    $category = $meal  [$sundaymeal]['category'];

while ( ( $meal [$sundaymeal] ['category'] == $meal [$mondaymeal] ['category'] ) || ( $meal [$mondaymeal] ['category'] == $meal [$tuesdaymeal] ['category'] ) || ( $meal [$tuesdaymeal] ['category'] == $meal [$wednesdaymeal] ['category'] ) || ( $meal [$tuesdaymeal] ['category'] == $meal [$wednesdaymeal] ['category'] ) || ( $meal [$wednesdaymeal] ['category'] == $meal [$thursdaymeal] ['category'] ) || ( $meal [$thursdaymeal] ['category'] == $meal [$fridaymeal] ['category'] ) || ( $meal [$fridaymeal] ['category'] == $meal [$saturdaymeal] ['category'] ) )   
{
    shuffle($options);
    $sundaymeal = $options[0];
$mondaymeal = $options[1];
 $tuesdaymeal = $options[2]; 
 $wednesdaymeal = $options[3];
  $thursdaymeal = $options[4]; 
  $fridaymeal = $options[5]; 
   $saturdaymeal = $options[6];
}








$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'sunday' )";
if (mysqli_query($con, $sql)) {
  
   } else {
   
   }

   $name = $meal [$mondaymeal] ['meal'];
   $category = $meal [$mondaymeal] ['category'];
$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'monday')";
if (mysqli_query($con, $sql)) {
 
  } else {
  
  }

  $name = $meal [$tuesdaymeal] ['meal'];
    $category = $meal [$tuesdaymeal] ['category'];
$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'tuesday')";
if (mysqli_query($con, $sql)) {
  
   } else {
   
   }
   
   $name = $meal [$wednesdaymeal] ['meal'];
    $category = $meal [$wednesdaymeal] ['category'];
$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'wednesday')";
if (mysqli_query($con, $sql)) {
  
   } else {
   
   }

   $name = $meal [$thursdaymeal] ['meal'];
    $category = $meal [$thursdaymeal] ['category'];
$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'thursday')";
if (mysqli_query($con, $sql)) {
  
   } else {
   
   }

   $name = $meal [$fridaymeal] ['meal'];
    $category = $meal [$fridaymeal] ['category'];
$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'friday')";
if (mysqli_query($con, $sql)) {
  
   } else {
   
   }

   $name = $meal [$saturdaymeal] ['meal'];
    $category = $meal [$saturdaymeal] ['category'];
$sql = "INSERT INTO assign (meal, category, day) VALUES ('$name', '$category', 'saturday')";
if (mysqli_query($con, $sql)) {
  
   } else {
   
   }

   $sql = "SELECT meal, category FROM assign";
   $test = $con->query ($sql);
   $meal = mysqli_fetch_all($test, MYSQLI_ASSOC);
   

         
    







$sqlquery = "SELECT meal FROM `assign` WHERE day = 'sunday'";

$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "sunday ";
echo $test[meal];
echo "<br>";
$sundaymeal =$test[meal];
$_SESSION['sundaymeal'] = $test[meal];
}


$sqlquery = "SELECT meal FROM `assign` WHERE day = 'monday'";
 
$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "monday ";
echo $test[meal];
echo "<br>";

$_SESSION['mondaymeal'] = $test[meal];

}



$sqlquery = "SELECT meal FROM `assign` WHERE day = 'tuesday'";

$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "tuesday ";
echo $test[meal];
echo "<br>";
$tuesdaymeal = $test[meal];
$_SESSION['tuesdaymeal'] = $test[meal];
}

$sqlquery = "SELECT meal FROM `assign` WHERE day = 'wednesday'";

$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "wednesday ";
echo $test[meal];
echo "<br>";
$wednesdaymeal = $test[meal];
$_SESSION['wednesdaymeal'] = $test[meal];

}


$sqlquery = "SELECT meal FROM `assign` WHERE day = 'thursday'";

$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "thursday ";
echo $test[meal];
echo "<br>";
$_SESSION["thursdaymeal"] = $test[meal];
}


$sqlquery = "SELECT meal FROM `assign` WHERE day = 'friday'";

$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "friday ";
echo $test[meal];
echo "<br>";
$_SESSION["fridaymeal"] = $test[meal];

}


$sqlquery = "SELECT meal FROM `assign` WHERE day = 'saturday'";

$run = mysqli_query ($con , $sqlquery) or die(mysqli_error($con));

$resulttest = $con->query($sqlquery);

while ($test = $resulttest->fetch_assoc()) {
    echo "saturday ";
echo $test[meal];
echo "<br>";
$_SESSION["saturdaymeal"] = $test[meal];

}

?>
<html>


<form action="reset.php" method="post" enctype="multipart/form-data">
                <input type="submit" class="button"  value="refresh">
            </form>


 <form action="save.php" method="post" enctype="multipart/form-data">
                <input type="submit" class="button"  value="save">
</form>
           
     




</html>





