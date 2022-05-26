<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/loginstyles.css">
	<title>Login</title>
</head>
<body>
	<div class="login-flex">
		<center>
			<h1>Registrati</h1>
			<form action="register.php" method="post">
				<input type="text" name="username" placeholder="Username">
				<br>
                <input type="email" name="email" id="email" placeholder="Email">
                <br>
				<input type="password" name="password" placeholder="Password">
				<br>
                <input type="password" name="retypepassword" id="retypepassword" placeholder="Retype password">
				<input type="submit" name="submit" id="submit" value="Register">
			</form>
			<p>Se hai già un account <a href="login.php">Accedi</a></p>
		</center>
	</div>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
        $email = $_POST['email'];
		$password = $_POST['password'];
        $retypepassword = $_POST['retypepassword'];
        $gate = true;

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
                echo "<br><br><br><br><center><h2>Username già in uso</h2></center>";
                $gate = false;
            }
            if($gate)
            {
                $query = 'SELECT * FROM users WHERE email = "'.$email.'";';
                $result = $conn->query($query);
                if($result->num_rows > 0)
                {
                    echo "<br><center><h2>Email già in uso</h2></center>";
                    $gate = false;
                }
            }
            if($gate)
            {
                if($password == $retypepassword)
                {
                    $query = 'INSERT INTO users (username, passwd, email) VALUES ("'.$username.'", "'.md5($password).'", "'.$email.'");';
                    $result = $conn->query($query);
                    if($result)
                    {
                        session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['email'] = $email;
                        $_SESSION['id'] = session_id();
                        $_SESSION['userlevel'] = 0;
                        $query = 'INSERT INTO sessionmanager (sessionid, userid, sessiontype) VALUES ("'.session_id().'", (SELECT id FROM users WHERE username = "'.$username.'"), 0);';
                        $conn->query($query);
                        $from = "Pippo";
                        $subject = "Conferma registrazione al sito";
                        $message = "<center><h1><a href='http://173.249.5.146/confirm.php?sessionid=".session_id()."'>Premi questo link per confermare l'accesso al sito</a></h1></center>";
                        $headers = "From:".$from."\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                        if(mail($email,$subject,$message,$headers))
                        {
                            echo "<br><br><br><br><center><h2>Guarda la mail di conferma</h2></center>";
                            header("refresh: 3; URL=login.php");
                        } else
                        {
                            echo "<br><br><br><br><center><h2>Errore nell'invio della mail di conferma</h2></center>";
                        }
                    } else
                    {
                        echo "Qualcosa non è andato come doveva";
                    }
                } else
                {
                    echo "<br><br><br><br><center><h2>Le password non corrispondono</h2></center>";
                }
            }
        }
	}
    else
	{

	}
?>