<!DOCTYPE html>
<html>
	<head>
		<title>Form Submit Page</title>
	</head>
	<body>
		Form submitted.<br>
		<br>

		<?php
			$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
			fwrite($myfile, $_POST["servername"] . "\n");
			fwrite($myfile, $_POST["username"] . "\n");
			fwrite($myfile, $_POST["password"] . "\n");
			fwrite($myfile, $_POST["dbname"] . "\n");
			fclose($myfile);
			chmod("testfile.txt",0650);
		?>
	</body>
</html>
