<?php

define('DECOUVERT_AUTORISE', 500);

class Compte_Courant{
    private $solde = 0;

    public function set_solde($solde) {
        $this->solde = $solde;
    }

    public function get_solde() {
        return $this->solde;
    }

    public function debiter($retrait) {
        $débit = $this->solde - $retrait;
        if($débit >= DECOUVERT_AUTORISE) {
            $this->solde -= $retrait;
            echo 'Vous avez retiré ' .$retrait. ' de votre compte, votre solde est désomé de ' .$this->solde. '€. <br>';
        }
        else {
            echo 'Votre retrait est trop élévé, il vous reste ' .$this->solde. '€ sur votre compte et votre plafond de découvert est de ' .$this->DECOUVERT_AUTORISE. '€.';
        }
        
    }

    public function deposer($dépot){
        $this->solde += $dépot;
    }
}
