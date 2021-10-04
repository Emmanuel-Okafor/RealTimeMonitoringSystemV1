<?php

function pdo_connect_mysql() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "orphanagedbrecords";
	try {
    return new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    echo "Connected to the database";
    }
catch(PDOException $e)
    {
    echo "Failed to connect to database: " . $e->getMessage();
    }
   
}

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
			
			<div class="mobile-nav">
				<img src="img/logo.png" alt="Logo">
				<h1> </h1>
			
		    </div>
            <a href="home.php"><i class="fas fa-home"></i>Home</a>
			<a href="dex.php"><i class="fas fa-user"></i>Admin</a>
			<a href="index.php"><i class="fas fa-sign-out"></i>Logout</a>
		</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>