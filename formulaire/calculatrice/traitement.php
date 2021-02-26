<?php

$Nombre1 = $_POST['nombre1'];
$Nombre2 = $_POST['nombre2'];
$Operation = $_POST['Operation'];

if($Operation == "addition") {
    $resultat = $Nombre1 + $Nombre2;
    echo "$resultat";
}
else if($Operation  == "soustraction") {
    $resultat = $Nombre1 - $Nombre2;
    echo "$resultat";
}
else if($Operation  == "division" && $Nombre2 > 0) {
    $resultat = $Nombre1 / $Nombre2;
    echo "$resultat";
}
else if($Operation == "multiplication") {
    $resultat = $Nombre1 * $Nombre2;
    echo "$resultat";
}
// else if($Operation == "division") {
//     if($Nombre2 || $Nombre1 = 0) {
//         echo "Il est impossible de division 0 ou de diviser par 0..";
//     }
// }


// switch('Operation') {
//     case 0 : 
//         $resultat = $Nombre1 + $Nombre2;
//         echo "$resultat";
//         break;

//     case 1 :
//         $resultat = $Nombre1 - $Nombre2;
//         echo "$resultat";
//         break;

//     case 1 : 
//         $resultat = $Nombre1 * $Nombre2;
//         echo "$resultat";
//         break;

//     case 3 : 
//         $resultat = $Nombre1 / $Nombre2;
//         echo "$resultat";
//         break;
// }
