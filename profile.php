<html>
	<body>
	<?php
		if ($_FILES["file"]["error"] > 0) {
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		}
		else {
			move_uploaded_file($FILES["file"]["tmp_name"],
							   "upload/" . get_image_path($_COOKIE));
		}
		echo "<img src='" . get_image_path($_COOKIE); "'>";
	?>
	<form action="profile.php" method="post"
		  enctype="multipart/form-data">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	</body>
</html>
