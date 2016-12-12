<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "21240", "wyzcaxru", "21240_schoolcheck");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_POST['title']);
$content = mysqli_real_escape_string($link, $_POST['content']);

 
// attempt insert query execution
$sql = "UPDATE newsarticles SET title = '$title', content = '$content' WHERE id= " .$id;
if(mysqli_query($link, $sql)){
    header("Location: ?action=admin");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>