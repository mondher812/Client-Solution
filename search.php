
<body style="background-color:rgba(0, 136, 255, 0.344);">


<?php


$conn = mysqli_connect("localhost", "hi", "hello", "IB");
$sql = "SELECT * FROM meals WHERE meal LIKE '%".$_POST['meal']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['meal']."</td>
		         
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found, click <a href=form.html here </a> here to add it</td></tr>";
}

?>