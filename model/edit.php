<?php
$sql = "SELECT * FROM newsarticles WHERE id= " .$id;
$result = $mysqli->query($sql);
$result = convertResultToArray($result);

?>
