<!DOCTYPE html>
<html>
	<head>
		<title>Set Variables</title>
	</head>
	<body>
		<form action="EWO_Submit_Form.php" method="POST">
			<table>
				<tbody>
					<tr>
						<td><label for="servername">Server Name:</label></td>
						<td><input type="text" id="servername" name="servername"></td>
					</tr>

					<tr>
						<td><label for="username">User Name:</label></td>
						<td><input type="text" id="username" name="username"></td>
					</tr>

					<tr>
						<td><label for="password">Password:</label></td>
						<td><input type="text" id="password" name="password"></td>
					</tr>

					<tr>
						<td><label for="dbname">Database Name:</label></td>
						<td><input type="text" id="dbname" name="dbname"></td>
					</tr>
				</tbody>
			</table>

			<input type="submit" value="Submit">
		</form>
	</body>
</html>
