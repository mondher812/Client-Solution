<body style="background-color:rgba(0, 136, 255, 0.344);">

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
  { }

$dayone = " sunday\n ";
$sundaymeal = $_SESSION['sundaymeal'] ;
$mondaymeal = $_SESSION['mondaymeal'] ;
$daytwo = " monday\n ";
$tuesdaymeal = $_SESSION['tuesdaymeal'] ;
$daythree = " tuesday\n ";
$wednesdaymeal = $_SESSION['wednesdaymeal'];
$dayfour = " wednesday\n ";
$thursdaymeal = $_SESSION['thursdaymeal'];
$dayfive = " thursday\n ";
$fridaymeal = $_SESSION['fridaymeal'];
$daysix = " friday\n ";
$saturdaymeal = $_SESSION['saturdaymeal'];
$dayseven = " saturday\n ";

$week = array ($sundaymeal, $mondaymeal, $tuesdaymeal, $wednesdaymeal, $thursdaymeal, $fridaymeal, $saturdaymeal);
$day = array( "sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday" );
for ($x=0;$x<sizeof($week); $x++) {
  $meal = $week[$x];
  $days = $day[$x];
$sql = "INSERT INTO PAST (meal, day) VALUES ('$meal', '$days' )";
  if (mysqli_query($con, $sql)) {
    
     } else {
     

     }
    
    }
echo "sunday ";
echo $_SESSION['sundaymeal'];
echo "<br>";
echo "monday ";
echo $_SESSION['mondaymeal'];
echo "<br>";
echo "tuesday ";
echo $_SESSION['tuesdaymeal'];
echo "<br>";
echo "wednesday ";
echo $_SESSION['wednesdaymeal'];
echo "<br>";
echo "thursday ";
echo $_SESSION["thursdaymeal"];
echo "<br>";
echo "friday ";
echo $_SESSION["fridaymeal"];
echo "<br>";
echo "saturday";
echo $_SESSION["saturdaymeal"];
echo "<br>";

$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = $sundaymeal;
fwrite($myfile, $txt);

$txt = $dayone;
fwrite($myfile, $txt);

$txt = $mondaymeal;
fwrite($myfile, $txt);
$txt = $daytwo;
fwrite($myfile, $txt);
$txt = $tuesdaymeal;
fwrite($myfile, $txt);
$txt = $daythree;
fwrite($myfile, $txt);
$txt = $wednesdaymeal;
fwrite($myfile, $txt);
$txt = $dayfour;
fwrite($myfile, $txt);
$txt = $thursdaymeal;
fwrite($myfile, $txt);
$txt = $dayfive;
fwrite($myfile, $txt);
$txt = $fridaymeal;
fwrite($myfile, $txt);
$txt = $daysix;
fwrite($myfile, $txt);
$txt = $saturdaymeal;
fwrite($myfile, $txt);
$txt = $dayseven;
fwrite($myfile, $txt);
fclose($myfile);


?>
<a href="testfile.txt" download="menu.txt">Download</a>

<form action="assing.html" method="post" enctype="multipart/form-data">
              <input type="submit" class="button"  value="return">
          </form>