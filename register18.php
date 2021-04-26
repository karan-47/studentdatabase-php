<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Site | REGISTER</title>
</head>
<body>

	<br>
	<!-- Form to input User data -->
	<!-- Add styles to make the UI better -->
	<form action="" method="post">
		<div> ENTER Email : <input type="email" name="email" placeholder="Enter
			your email"></div>
			<br>
			<div>ENTER Password : <input type="password" name="password"
				placeholder="Enter your password"></div>

				<div>ENTER Name : <input type="text" name="humranaam"
					placeholder="Enter your password"></div>

					<div>ENTER Id : <input type="text" name="uid"
						placeholder="Enter your password"></div>	
						<br>
						<input type="submit">
					
					</form>
				</body>
				</html>

				<?php

				if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$email=$_POST["email"];
					$password=$_POST["password"];
					$namo=$_POST["humranaam"];
					$uid=$_POST["uid"];

					$user='root';
					$pass='';
					$db='testdb';

					$conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
                      
                      //SEQUENCE ID,NAME,EMAIL,PASSWORD
					$query="INSERT into users (id,name,email,password) values($uid,'$namo','$email','$password')";
					if(mysqli_query($conn,$query))
					{
						echo "inserted values successfully";
					}
					else
					{
						echo "fail to insert";
					}
				}
				session_destroy();
				?>