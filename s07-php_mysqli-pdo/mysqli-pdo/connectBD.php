<?php

// MySQLI

/* $servername = "localhost";
$username = "Hamza";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully MySQLI"; */

// PDO

$servername = "localhost";
$username = "Hamza";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=salon", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully PDO";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>