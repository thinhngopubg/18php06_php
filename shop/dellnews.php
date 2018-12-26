<?php
require 'connect.php';
$id = (int)$_GET['id']; 

$del = "DELETE FROM `news` WHERE `id` = $id";

if(!mysqli_query($conn, $del)) {
	die('Error :' ). mysqli_connect_error($conn);
}else {
	echo '<script>alert("Delete Success")</script>';
	header('Location:index.php');
}


?>