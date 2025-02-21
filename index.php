<?php

$dbHost     = "localhost";
$dbUsername = "hi";
$dbPassword = "hello";
$dbName     = "IB";


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>

<html>
<head>
    <title>Upload CSV file</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 style="font-size:60px;">Meal generator - file upload</h1>
<body style="background-color:rgba(0, 136, 255, 0.344);">

<form action="importData.php" method="post" enctype="multipart/form-data">
<h1> please upload possible meals here .CSV or you can 
    manually fill in <a href="form.html">this form</a>
<a> </h1>
<h1> want to check if meal exists ? click <a href="indexs.php"> here </a>

<div class="wrap">
            <input class="file" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="file" id="file" />
            <div class="wrap">
                
            </div>

            <input type="submit" class="button" name="importSubmit" value="IMPORT">
            </div>
          
            
            
          </form>
    
</body>
</html>

  

