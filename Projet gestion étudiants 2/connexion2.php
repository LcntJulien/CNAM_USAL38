<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Gestion-étudiants";
$port = 8888;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// $sql = "INSERT INTO ETUDIANT (NOM, MAIL, PHOTO)
// VALUES ($Nom, $Email)";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error. "<br>";
// }

// $conn->close();