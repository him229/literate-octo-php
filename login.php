	<?php
		//print_r($_POST);
		// echo "<br>";
		if (isset($_POST["userId"]) && isset($_POST["password"])) 
		{		
		echo htmlspecialchars($_POST["userId"]);
		echo "<br>";
		echo $_POST["password"];
	}
	else
	{
	?>

<html>
<title>
</title>
<body>
	<form method="post">	
		UserID: <input type="text" name="userId">
		<br><br>
		Password: <input type="password" name="password">
		<br><br>
		<input type="submit">

	</form>
</body>
</html>

<?php
}
?>
