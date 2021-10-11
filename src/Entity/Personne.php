<?php

namespace ISL\Entity;

class Personne {
    private $nom;
    private $prenom;
    private $adresse;
    private $code_postal;
    private $pays;
    private $societe; 

    public function __construct($new_nom, $new_prenom, $new_adresse, $new_code_postal, $new_pays, $new_societe){
      $this->nom = $new_nom;
      $this->prenom = $new_prenom;
      $this->adresse = $new_adresse;
      $this->code_postal = $new_code_postal;
      $this->pays = $new_pays;
      $this->societe = $new_societe;
    }

    // Accesseurs
    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getCodePostal(){
        return $this->code_postal;
    }

    public function getPays(){
        return $this->pays;
    }

    public function getSociete(){
        return $this->societe;
    }

    // Mutateurs
    public function setNom($new_nom){
        $this->nom = $new_nom;
      }

      public function setPrenom($new_prenom){
        $this->prenom = $new_prenom;
      }

      public function setAdresse($new_adresse){
        $this->adresse = $new_adresse;
      }

      public function setCodePostal($new_code_postal){
        $this->code_postal = $new_code_postal;
      }

      public function setPays($new_pays){
        $this->pays = $new_pays;
      }

      public function setSociete($new_societe){
        $this->societe = $new_societe;
      }
    
}
