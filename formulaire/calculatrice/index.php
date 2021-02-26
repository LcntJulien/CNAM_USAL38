<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculatrice.css">
</head>
<body>
    <div class="calculette">
    <form action="traitement.php" method="post">
        Nombre1 : <input type="number" name="nombre1">
            <br>
        Nombre2 : <input type="number" name="nombre2">
            <br>
        Opération : <select name="Operation" size="1" id="operation">
                        <option value="addition">Addition</option>
                        <option value="soustraction">Soustraction</option>
                        <option value="multiplication">Multiplication</option>
                        <option value="division">Division</option>
                    </select>
            <br>
        <input type="submit" value="valider">
    </form>
    </div>
</body>
</html>