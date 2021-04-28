<!DOCTYPE html>
<html>
	<head>
		<title>MySQL Insert Data</title>
	</head>
	<body>
		<?php
			$myfile = fopen("testfile.txt", "r") or die("Unable to open file!");

			$servername = trim(fgets($myfile));
			$username = trim(fgets($myfile));
			$password = trim(fgets($myfile));
			$dbname = trim(fgets($myfile));

			fclose($myfile);

			try
			{
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql = "INSERT INTO MyGuests (firstname, lastname, email)
				VALUES ('John', 'Doe', 'john@example.com')";

				// use exec() because no results returned
				$conn->exec($sql);
				echo "New record created successfully.<br>";
			}
			catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}

			$conn = null;
		?>
	</body>
</html>
