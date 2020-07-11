<html>

	<head>

		<title>Login</title>
		<link rel="stylesheet" href="css/CSSReset.css">
		<link rel="stylesheet" href="css/login.css">

	</head>

	<body>

		<div class="box">
			<div class="boxTitolo">
				Login
			</div>
			<div class="boxInterno">
				<form action="insertpost.php" method="post">
					Inserire Email	<br>
					<input type="text" name="email" placeholder="Email" />	<br>
					Inserire password	<br>
					<input type="text" name="password" placeholder="Password" />	<br>
					<input type="submit" name="login" value="Login" />	<br>
				</form>
			</div>
		</div>
		<?php
			if (isset($_POST["login"]))
			{
				include "database/verify.php";
			}
		?>

	</body>

</html>
