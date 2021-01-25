<?php
declare(strict_types=1);

function afficherMsg($nom) {
    echo 'Bonjour ' . $nom . '<br>' ;
}

afficherMsg('Julien');

function addition($nb1, $nb2) {
    return $nb1 + $nb2;
}

echo addition(2,3);