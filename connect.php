<?php

$connection = mysqli_connect("localhost", "root", "root");

if(!$connection){
	
	echo "Failed to connect" . die(mysqli_error($connection));
}


$dbselect = mysqli_select_db($connection, "Demo");
if(!$dbselect){
	
	echo "Failed to select database" . die(mysqli_error($connection));
}

?>