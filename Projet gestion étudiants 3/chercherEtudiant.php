<?php

require_once ("verifAuthentification.php");
require_once ("connexionPDO.php");

$search = "";
if(isset($_POST['search'])){
    $search = $_POST['search'];
}

$stmt = $conn->prepare("select code, nom, photo from etudiant where nom like '%$search%'");
$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $mdp_crypte);
// echo $sql;
$stmt->execute();

/* if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "code: " . $row["code"]. " - Nom: " . $row["nom"]. "<br>";
  }
} else {
  echo "0 results";
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chercher étudiants</title>
</head>
<body>
    <table border="1" width="80%">
        <tr>
            <form action="chercherEtudiant.php" method="POST">
            <td>Chercher un étudiant : </td>
            <td><input type="text" name="search" value="<?php echo($search) ?>"></td>
            <td><input type="submit" value="Chercher"></td>
            </form>
        </tr>
        <tr>
            <th>CODE</th><th>NOM</th><th>PHOTO</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo($row['code']) ?></td>
                <td><?php echo($row['nom']) ?></td>
                <td><img src="images/<?php echo($row['photo']) ?>"></td>
                    <?php if($_SESSION['NIVEAU'] == 0) { ?>
                        <td><a href="supprimerEtudiant.php?code=<?php echo($row['code']) ?>">Supprimer</a></td>
                        <td><a href="editerEtudiant.php?code=<?php echo($row['code']) ?>">Modifier</a></td>
                    <?php } ?>
            </tr>
        <?php } ?>
    </table>
            <!-- <div>
                <form action="afficher-Etudiant.php"></form>
                <input type="submit" value="retour">
            </div> -->
            <?php if($_SESSION['NIVEAU'] == 0) { ?>
                <form action="formulaire.php">
                    <input type="submit" value="Ajouter étudiant">
                </form>
            <?php } ?>
                <form action="index.php">
                    <input type="submit" value="Se déconecter">
                </form>
</body>
</html>