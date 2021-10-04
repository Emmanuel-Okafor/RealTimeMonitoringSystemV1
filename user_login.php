<?php 
//include '/Database/database_pdo.php';

// try {
//     if(isset($_POST['submit'])){
//         header('Location: user.php');
//     }
// }catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getmessage();
//     }

//print_r($_POST);
?>





<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="stylex.css" rel="stylesheet" type="text/css"> 
	</head>
	<body>
		<div class="login">
			<h1>User</h1>
			<form action="user.php" method="post">
				<label for="User">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="user" placeholder="Username" id="user" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="user_password" required>
                <br>
				<input type="submit" value="Login">
                <!-- <h2>Dont have an account?</h2> -->
				<input type="submit" value="sign-Up">
			</form>
		</div>
	</body>
</html>