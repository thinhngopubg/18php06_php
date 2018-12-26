<?php
require 'connect.php';

$select = "SELECT * FROM `news`";

$kq = mysqli_query($conn, $select);

if(!$kq) {
	die('Error :'). mysqli_connect_error($conn);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>List News</title>
</head>
<body>

<table cellspacing="0" border="1">
	
	<thead>
		<tr>
			<td>News ID</td>
			<td>News Tittle</td>
			<td>News ThumbImage</td>
			<td>News Description</td>
			<td>News Content</td>
			<td>News Date Created</td>
			<td>News Date Update</td>
			<td>Action</td>
		</tr>
	</thead>

	<tbody>
			<?php
				if(mysqli_num_rows($kq) > 0) {

					while ($row = mysqli_fetch_assoc($kq)) {

					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><img width="100" src="<?php echo $image ?>"></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['content']; ?></td>
						<td><?php echo $row['datecreate']; ?></td>
						<td><?php echo $row['dateupdate']; ?></td>
						<td><a style="text-decoration: none; color: red;" href="dellnews.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>


					<?php
					}
				}
			?>



	</tbody>


</table>


</body>
</html>