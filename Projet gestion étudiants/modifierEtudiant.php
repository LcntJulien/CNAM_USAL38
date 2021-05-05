<?php
require_once ("verifAuthentification.php");
require_once ("connexion.php");

$code = $_POST['code'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$photo_nom = $_FILES['photo']['name'];
$file_tmp_name = $_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name, "./images/$photo_nom");

$req = "update etudiant set nom = '$nom', mail = '$mail', photo = '$photo_nom' where code = $code";

$res = $conn->query($req);

header("location:afficherEtudiant.php");

?>
