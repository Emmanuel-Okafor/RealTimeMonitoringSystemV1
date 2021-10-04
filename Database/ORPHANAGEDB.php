<?php

$servername = "localhost";
$username = "root";
$password = "";


try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    
    // Set the PDO error mode to exception 
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE orphanagedbrecords";

    // Use exec() because on results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getmessage();
    }

// Defining our database
$dbname = "orphanagedbrecords";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    // sql to create table
    $sql = "CREATE TABLE orphanstb(
    id int(200) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    DOB VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    education VARCHAR(25500) NOT NULL,
    class VARCHAR(25500) NOT NULL,
    disability VARCHAR(25500) NOT NULL,
    state VARCHAR(25500) NOT NULL,
    LGA VARCHAR(25500) NOT NULL,
    vulnerable_unit VARCHAR(25500) NOT NULL,
    PRIMARY KEY (id)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8";
         
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Contacts created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    // Insert Data into mysql Database to fill the tables
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);

    // Set the PDO error mode to execption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =  "INSERT INTO orphanstb (id, name, DOB, gender, education, class, disability, state, LGA, vulnerable_unit) 
    VALUES
        (1, 'Aliyu Garba', '25-12-2016', 'male', 'primary','primary1','blind','Kaduna','Zaria', 'Almajiri-Centres')";
        
    
    // Use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully<br>";
    }
catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getmessage();
    }

$conn = null;

?>