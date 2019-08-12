<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Notes_Database";
//create db
try {
    $conn = new PDO("mysql:host={$servername}; dbname={$dbname}", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE Notes_Database";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//Create table
// try {
//     $conn = new PDO("mysql:host={$servername}; dbname={$dbname}", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // $sql = "CREATE DATABASE Notes_Database";
//     /*SQL Database*/
//     $sql ="CREATE TABLE Notes_Table (
//             id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             Title VARCHAR(100) NOT NULL UNIQUE,
//             Notes VARCHAR(max) NOT NULL,
//             Author  VARCHAR(100) NOT NULL
//             )";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Table created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

$conn = null;
?> 
