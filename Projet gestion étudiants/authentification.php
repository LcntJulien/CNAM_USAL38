<!-- Code du prof : necessaire car utilisation du fetch_assoc() qui permet l'implentation du niveau dans la sessions pour autoriser l'authentification client(impossible si juste un nombre de ligne)-->
<?php

require_once ("connexion.php");

$login=$_POST['login'];
$password=$_POST['password'];

$pwdCrypted = md5($password);

$sql="select niveau from users where login='$login' and password='$pwdCrypted'";

$result = $conn->query($sql);
if($user=$result->fetch_assoc()) {
    header("location:chercherEtudiant.php");
    session_start();
    $_SESSION['NIVEAU']=$user['niveau'];
} else {
    header("location:index.php");
} 

?>

<!-- Mon code de base : avec juste un num_rows pour la vérif de résultats T/F qui permet l'authentification client -->
<?php

// require_once ("connexion.php");

// $login = $_POST['login'];
// $password = $_POST['password'];

// $sql = "SELECT login, password FROM users where login = '$login' and password = '$password' ";
// $result = $conn->query($sql);

// if (isset($result)){
// if ($result->num_rows > 0){
//     header("location:chercherEtudiant.php");
// }
// else{
//     header("location:index.php");
// }
?>