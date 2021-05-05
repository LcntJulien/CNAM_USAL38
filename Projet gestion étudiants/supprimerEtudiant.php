<?php
require_once ("verifAuthentification.php");
require_once ("connexion.php");

$code = $_GET['code'];
$sql = "delete from ETUDIANT where code = $code";

if ($conn->query($sql) !== TRUE) {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();

  // Redirect
  header("location:afficher-Etudiant.php");

  // Forward
  //require_once ("afficherEtudiant.php");

