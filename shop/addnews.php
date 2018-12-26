<?php
require 'connect.php';

$id = '';
$title = '';
$image = ''; 
$description = '';
$content = '';
$datecreate = '';

if(isset($_POST['addnews'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$datecreate = $_POST['datecreate'];

	$sql = "INSERT INTO `news`(`id`, `title`, `image`, `description`, `content`, `datecreate`) VALUES ('$id', '$title', '$image', '$description', '$content', '$datecreate') ";

	if(!mysqli_query($conn, $sql)) {
		die('Error :'). mysqli_error($conn);
	}else{
		echo "<script>A News Added Success</script>";
	}

	$val = move_uploaded_file($_FILES['image']['tmp_name'], $target);

	if($val) {
		echo "Image uploaded !";
		header("Location:index.php");
	}else{
		"Upload Image Failed :";
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
	<meta charset="utf-8">
</head>
<body>

<!-- Form add News  start-->
<form action="" name="addnews" method="POST" enctype="multipart/form-data" >
	
<label>News ID</label>
<input type="number" name="id" placeholder="Fill id here..." required="required"><br />

<label>News Title</label>
<input type="text" name="title" placeholder="News Title here..." required="required"><br />

<label>News Images</label>
<input type="file" name="image"><br />

<label>News Description</label>
<input type="text" name="description"><br />

<label>News Content</label>
<input type="text" name="content"><br />


<label>News Date Create</label>
<input type="date" name="datecreate"><br>

<input type="submit" name="addnews">
</form>


</body>
</html>