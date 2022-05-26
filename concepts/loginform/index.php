<?php
	include('loginform.html');

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Create connection
		$conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
		// Check connection
		if ($conn->connect_error)
		{
			echo("Connection failed: " . $conn->connect_error);
		}
		else
		{
			if(isset($_POST['islogin']))
			{
				echo "ISLOGIN";
				$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".md5($password)."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0)
				{
					echo "Login successfull";
				}
				else
				{
					echo "Login failed";
				}
			}
			else
			{
				echo "ISREGISTER";
				$email = $_POST['email'];
				$sql = "INSERT INTO users (username, email, passwd) VALUES ('".$username."', '".$email."' '".md5($password)."')";
				$result = $conn->query($sql);

				if ($result === TRUE)
				{
					echo "New record created successfully";
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}

		

		$conn->close();
	}
?>