<?php

$sql = "SELECT * FROM newsarticles";
$newsarticles = $mysqli->query($sql);
	
$total_number_newsarticles = $newsarticles->num_rows;

$total_number_newsarticles = ceil($total_number_newsarticles / NR_ITEMS_PER_PAGE);
	
