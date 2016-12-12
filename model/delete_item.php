<?php 

$sql = "DELETE FROM `newsarticles` WHERE id=$id";

$mysqli->query($sql);

header('location: ?action=admin');
?>