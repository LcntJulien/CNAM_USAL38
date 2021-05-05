<?php

require_once ("verifAuthentification.php");
require_once ("connexion.php");

$code = $_GET['code'];
$req = "select code, nom, mail from etudiant where code = $code";
$rs = $conn->query($req);

$row = $rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="modifierEtudiant.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Code :</td>
                <td><input type="text" name="code" value="<?php echo($row['code']) ?>" readonly="true"></td>
            </tr>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom" value="<?php echo($row['nom']) ?>"></td>
            </tr>
            <tr>
                <td>Mail :</td>
                <td><input type="text" name="mail" value="<?php echo($row['mail']) ?>"></td>
            </tr>
            <tr>
                <td>Photo :</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enregistrer"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

$conn->close();

?>