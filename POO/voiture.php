<?php

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
}
