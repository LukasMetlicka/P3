@extends("_master")
<html>
	<head> 
		<?php require('logic.php'); ?>
		<link type="text/css" rel="stylesheet" href="style/style.css">
	</head>
	
	<body>
		<div class="form"> 
			<form method="post" action="index.php"><br>
				<h3> Number of Words:</h3> <input class="textbox" type="text" name="characters">
				<input type="submit" value="Submit" class="submit">
			</form>
		</div>
		<div class="pass">
			<h1> Your Password is: </h1>
			<h2>{{ $password }}</h2>
		</div>
	</body>
</html>