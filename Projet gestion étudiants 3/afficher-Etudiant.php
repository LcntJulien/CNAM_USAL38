<?php

require_once ("verifAuthentification.php");
require_once ("connexionPDO.php");

$stmt = $conn->prepare("select code, nom, photo from etudiant");
$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $mdp_crypte);

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
    <title>Afficher étudiant</title>
</head>
<body>
      <table border="1" width="80%">
        <tr>
            <th>CODE</th><th>NOM</th><th>PHOTO</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo($row['code']) ?></td>
                <td><?php echo($row['nom']) ?></td>
                <td><img src="images/<?php echo($row['photo']) ?>"></td>
                <td><a href="supprimerEtudiant.php?code=<?php echo($row['code']) ?>">Supprimer</a></td>
                <td><a href="editerEtudiant.php?code=<?php echo($row['code']) ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>