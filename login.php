<?php
session_start();
include("data/inc/dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Blog Sign in</h3>
			</div>

			<div class="panel-body">
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username">

						<label for="password">Passwort:</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Passwort">
					</div>
					<button type="submit" class="btn btn-default" name="button" id="button">Login</button>
				</form>
			</div>

			<div class="panel-footer">
				<p>
					Blog is made with Love
				</p>
			</div>
		</div>
	</div>




	<?php



	 ?>

	</body>
</html>
