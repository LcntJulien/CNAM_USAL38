<?php
require_once 'voiture.php';

// Instanciation d'un objet de type Voiture
// $v1 = new  Voiture();
// $v1->marque = 'Fiat';
// $v1->modele = 'Punto';

// $v1->set_marque('Fiat');
// $v1->set_modele('Punto');

// echo 'La voiture est de marque ' .$v1->marque. 'et de modele ' .$v1->modele. '.<br>';
// echo 'La voiture est de marque ' .$v1->get_marque(). 'et de modele ' .$v1->get_modele(). '.<br>';

$v2 = new Voiture('Fiat','Grande Punto');
echo 'La voiture v2 est de marque ' .$v1->get_marque(). 'et de modele ' .$v1->get_modele(). '.<br>';