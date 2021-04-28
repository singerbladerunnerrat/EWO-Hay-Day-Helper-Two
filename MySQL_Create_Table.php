<!DOCTYPE html>
<html>
	<head>
		<title>MySQL Create Table</title>
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

				// sql to create table
				$sql = "CREATE TABLE MyGuests (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50),
				reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
				)";

				// use exec() because no results returned
				$conn->exec($sql);
				echo "Table created successfully.<br>";
			}
			catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}
		?>
	</body>
</html>
