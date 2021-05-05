<?php
require_once ("verifAuthentification2.php");
require_once ("connexion2.php");

$code = $_GET['code'];
$sql = "delete from ETUDIANT where code = $code";

if ($conn->query($sql) !== TRUE) {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();

  // Redirect
  header("location:afficher-Etudiant2.php");

  // Forward
  //require_once ("afficherEtudiant.php");

