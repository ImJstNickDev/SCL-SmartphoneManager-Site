<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="loginstyles.css">
	<title>Login</title>
</head>
<body>
	<div class="login-flex">
		<center>
			<h1>Accedi</h1>
			<form action="login.php" method="post">
				<input type="text" name="username" placeholder="Username">
				<br>
				<input type="password" name="password" placeholder="Password">
				<br>
				<input type="submit" value="Login">
			</form>
			<p>Se non hai un account <a href="register.php">Registrati</a></p>
		</center>
	</div>
</body>
</html>

<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
		if($conn->connect_errno)
		{
			exit;
		} else
		{
			$query = 'SELECT * FROM users WHERE username = "'.$username.'";';
			$result = $conn->query($query);
			if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				if($row['passwd'] == md5($password))
				{
					if($row['attivo'] != 0)
					{
						session_start();
						$_SESSION['username'] = $username;
						$_SESSION['email'] = $row['email'];
						$_SESSION['id'] = session_id();
						$_SESSION['userlevel'] = $row['userlevel'];
						$_SESSION['attivo'] = $row['attivo'];
						header("Location: index.php");
					} else
					{
						echo "<h2><center>Utente non attivo, conferma l'email</center></h2>";
					}
				} else
				{
					echo "Password errata";
				}
			} else
			{
				echo "Username non trovato";
			}
		}
	} else
	{

	}
?>