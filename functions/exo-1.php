<?php

function SommeNb($nb) {
    $somme = 0;
    for($i=0; $i<=$nb;$i++) {
        $somme = $somme + $i;
    }
    return $somme;
}
echo SommeNb(4);

function SommePairs($nb) {
    $somme = 0;
    for($i=0; $i<=$nb;$i++) {
        if($i%2 == 0) {
        $somme = $somme + $i;
        }
    }
    return $somme;
}
echo SommePairs(6);

