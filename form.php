<?php
$server="localhost";
$username="hi";
$password="hello";
$dbname="IB";

$con = mysqli_connect($server, $username, $password, $dbname);
if(isset($_POST["submit"])){
   if(!empty($_POST["meal"]) && !empty($_POST["category"]) ) {
$meal = $_POST["meal"] ;
$category = $_POST["category"] ;   
$query = "INSERT INTO meals(meal ,category) values ('$meal' ,'$category') ";

$run = mysqli_query ($con , $query) or die(mysqli_error($con));
if($run){
   echo "form submitted" ; 
}
else
echo "form not submitted";


   }
   else 
   echo " complete the form ";
}



?>
 
