<?php

$dbHost     = "localhost";
$dbUsername = "hi";
$dbPassword = "hello";
$dbName     = "IB";


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if(isset($_POST['importSubmit'])){
    

    
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
                if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
           
            fgetcsv($csvFile);

            while(($line = fgetcsv($csvFile)) !== FALSE){
       
                $meal   = $line[0];
                $category  = $line[1];
                
                
               
         
                    $db->query("INSERT INTO meals (meal, category) VALUES ('".$meal."', '".$category."')");
                
            }

            
            

            fclose($csvFile);
            
        }
    }
    
}
echo '<script>location.href="assing.html";</script>';
?>