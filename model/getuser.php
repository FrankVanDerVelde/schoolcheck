<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<?php
$q = $_GET['q'];

//$con = mysqli_connect('localhost','root','','myband');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
	
$con = mysqli_connect('localhost','21240_MyBand','wyzcaxru','21240_myband');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
	
	

mysqli_select_db($con,"champions");
$sql="SELECT * FROM champions WHERE name LIKE '".$q."%'";
$result = mysqli_query($con,$sql);

	

while($row = mysqli_fetch_array($result)) {
	
	
	echo "<div class='div-icons'>";
    echo   "<h4>" . $row['name'] . "</h1>"  ;
    echo "<img class='zoekImages' src='images/champions/".$row['img']."'>";
	echo "</div>";
}
	


mysqli_close($con);
?>
</body>
</html>