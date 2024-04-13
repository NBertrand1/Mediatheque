<?php

// Define connection details (replace with your actual information)
$host = "localhost";
$username = "root";
$password = "root";
$database = "projet_cloud";

try {
  // Connect to the database using PDO
  $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error reporting mode
  //echo "Connected to database successfully!";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
