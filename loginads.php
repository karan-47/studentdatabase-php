<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration </title>
	<?php 
		session_start();
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			if (isset($_POST['username']) && isset($_POST['password'])){
				$uid = $_POST['username'];
				$pass = $_POST['password'];
				$_SESSION['uid']=$uid;

				$con=mysqli_connect("localhost","root","","#YOUR DATABASE NAME");
		
				if (mysqli_connect_errno($con)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}
				if (!$con) {
					die("database not connected");
				}else{
					$sql = "SELECT * FROM LOGIN_CREDENTIALS WHERE uid = '$uid' and password = '$pass'";
					$result=mysqli_query($con,$sql);
					$result = mysqli_fetch_assoc($result);
					if ($result==""){
						header("location:loginads.php");
						echo "<script>alert('User doesn't exist');</script>";
		
						
						
					}
					else{
						echo "<script>alert('Login Successfull!');
								window.location.href='displayads.php'
							</script>";
					}
					$con->close();

				}
			}

		}
		
		
	?>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="form-box">
			<h1>Login here</h1>
			<div class="box-1">
			<form action="loginads.php" method="post">
				
					<input type="name" name="username" placeholder="Enter Name">
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit"  value="login">
				
			</form>
			</div>
	</div>
	</body>
	<script>
	</script>	

</body>
</html>