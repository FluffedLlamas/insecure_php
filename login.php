<?php
include 'functions.php';
if (isset($_POST['USER'])) {
	if (authenticate($_POST['USER'], $_POST['PASS'])) {
		// redirect Success
		header('Location: board.php');
	}
	else {
		// login fails
	}
}
?>

<html>
<body>
<?php

if (logged_in()) {
	echo "You are already logged in."
}
else {
	$code = <<<EOD
	<form method="POST" action="login.php">
		<input type="hidden" id="USER">
		<input type="hidden" id="PASS">
		<input type="submit">
	</form>
	EOD;
	echo EOD;
}
?>
</body>
</html>
