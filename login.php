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
				<?php
				  session_start(); // come sempre prima cosa, aprire la sessione
				  include("database/db_conn.php"); // includere la connessione al database
				?>
				<h2>Login</h2>
				<form method="post" action="database/verify.php">
				  <p>Username</p><input type="text" name="username" >
				  <p>Password</p><input type="text" name="password">
				  <p><button>Accedi</button></p>
				</form>
			</div>
		</div>
	</body>
</html>
