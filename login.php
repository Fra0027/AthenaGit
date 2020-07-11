<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/CSSReset.css">
		<link rel="stylesheet" href="css/stylelogin.css">
	</head>
	<body style="background-image: url('images/pattern.png')">
		<div class="box">
			<div class="boxTitolo">
				Login
			</div>
			<div class="boxInterno">
				<form method="post" action="database/verify.php">
				  <p>Username</p><input type="text" name="username" placeholder="Email" />
				  <p>Password</p><input type="password" name="password" placeholder="Password" />
				  <p><input type="submit" value="Accedi" /></p>
				</form>
			</div>
		</div>
	</body>
</html>
