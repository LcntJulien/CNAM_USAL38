<?php
define('VILLE', 'ville');
define('AUTOROUTE', 'autoroute');

class Voiture {
    private $marque;
    private $modele;

    public function get_marque() {
        return $this->marque;
    }

    public function set_marque($marque) {
        $this->marque = $marque;
    }

    public function get_modele() {
        return $this->modele;
    }

    public function set_modele($modele) {
        $this->marque = $modele;
    }

    public function _construct($marque,$modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function get_vitesse_courante() {
        return $this->vitesee_courante;
    }

    public function set_vitesse_courante($vitesse_courante) {
        $this->vitesse_courante = $vitesse_courante;
    }

    public function afficherVoiture() {
        echo 'Je suis une voiture de la marque ' .$this->marque. 'et de modele ' .$this->modele. '.<br>';
        echo 'Je roule actuellement à ' .$this->get_vitesse_courante();
    }

    public function accelerer($acceleration, $type_route){
        $nouvelle_vitesse = $this->vitesse_courante + $acceleration;

        if($type_route == 'ville') {
            if($nouvelle_vitesse <= 50) {
                $this->vitesse_courante = $nouvelle_vitesse;
            } else {
                // Excès de vitesse
                echo 'Attention la vitesse est limitée à 50 km/h <br>';
                $this->vitesse_courante = 50;
            }
        } elseif($type_route == 'autoroute') {
            if($nouvelle_vitesse <= 130) {
                $this->vitesse_courante = $nouvelle_vitesse;
            } else {
                // Excès de vitesse
                echo 'Attention la vitesse est limitée à 130 km/h <br>';
                $this->vitesse_courante = 130;
            }
        } else {
            echo 'Type de route inconnue !!! <br>';
        }
    }

    public function freiner() {
        echo "Je m'arrête à une intersection <br>";
        $this->vitesse_courante = 0; 
    }
}
