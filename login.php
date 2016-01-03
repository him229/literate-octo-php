	<?php

		//print_r($_POST);
		echo "<br>";

		if (!empty($_POST)) 
		{		
		echo $_POST["userId"];
		echo "<br>";
		echo $_POST["password"];
	}

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
	<?php

		//print_r($_POST);
		echo "<br>";

		if (!empty($_POST)) 
		{		
		echo $_POST["userId"];
		echo "<br>";
		echo $_POST["password"];
	}

	?>
</body>
</html>