<?php
require_once 'Voiture.php';

// Instanciation d'un objet de type Voiture
//$v1 = new Voiture();
//$v1->marque = "peugeot";
//$v1->modele = "3008";

//$v1->set_marque("Peugeot");

//echo 'La voiture est de marque ' . $v1->marque . ' et de modèle ' . $v1->modele . '<br>';
//echo 'La voiture V1 est de marque ' . $v1->get_marque() . '<br>';

$v2 = new Voiture("Renault", "Clio");
//echo 'La voiture V2 est de marque ' . $v2->get_marque() . ' et de modèle ' . $v2->get_modele() . '<br>';

// $v2->afficherVoiture();
// $v2->accelerer(20, "ville");
// $v2->afficherVoiture();
// $v2->freiner();
// $v2->accelerer(50, "ville");
// $v2->afficherVoiture();
// $v2->accelerer(100, "autoroute");
// $v2->afficherVoiture();
// $v2->accelerer(100, "circuit");

// $nb = 5;
// echo 'ma variable nb vaut : ' . $nb . ' <br>';
// $v2->ralentir($nb);
// echo 'ma variable nb vaut : ' . $nb . ' <br>';

$v1 = new Voiture("Peugeot", "3008");
// $v1->accelerer(50, "ville");
// $v1->afficherVoiture();
// $v2->depasser($v1);
// $v1->afficherVoiture();

$v3 = new Voiture("BMW", "Serie 3");

$v4 = new Voiture('Porsche', '992 Turbo S');

echo 'Nombre de voitures crées : '. $v1::$nb_voiture_crees . '<br>';