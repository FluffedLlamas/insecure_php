<html>
	<body>
		<?php
			include 'functions.php';

			if (isset($_POST['comment'])) {
				sanitize_and_store($_POST['comment']);
			}

			print_forum();

			if (logged_in()) {
				$code = <<<EOD
				<form method="POST" action="board.php" id="comment_form">
					<textarea name="comment" form="comment_form">
						Enter comment here...
					</textarea>
					<input type="submit">
				</form>
				EOD;
				echo EOD;
			}
		?>
	</body>
</html>
