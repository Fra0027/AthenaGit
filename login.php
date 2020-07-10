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
				<form action="<?php echo $_SERVER['insertpost.php']; ?>" method="post">
					Inserire Email	<br>
					<input type="text" name="email" placeholder="Email" />	<br>
					Inserire password	<br>
					<input type="text" name="pass" placeholder="Password" />	<br>
					<input type="submit" name="b" value="Login" />	<br>
				</form>
			</div>
		</div>
		<?php
			if (isset($_POST["b"]))
			{
				include_once "database/collegamentoUtenti.php";
			}
		?>

	</body>

</html>
