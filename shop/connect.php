<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'shopelse';
 
$conn = mysqli_connect($server, $username, $password, $db);
 
if(mysqli_connect_errno()) {
	"Error: ". mysqli_connect_error($conn);
}else{
	echo '<script>alert("Connect Success")</script>';
}