<html>

	<head>

		<title>
			Login
		</title>
		<link rel="stylesheet" href="CSS/CSSReset.css">
		<link rel="stylesheet" href="CSS/login.css">

	</head>

	<body>

		<div class="box">
			<div class="boxTitolo">
				Login
			</div>
			<div class="boxInterno">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					Inserire Email	<br>
					<input type="text" name="email" placeholder="Email" />	<br>
					Inserire password	<br>
					<input type="text" name="pass" placeholder="Password" />	<br>
					<input type="submit" name="b" value="Login" />	<br>
				</form>
				<div class="reg">
					Se non sei un utente registrato , <a href="Registrazione.php"> registrati </a>
				</div>
			</div>
		</div>

	</body>

</html>
