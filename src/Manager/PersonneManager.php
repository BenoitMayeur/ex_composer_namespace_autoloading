<?php

namespace ISL\Manager;

use Faker\Factory;
use ISL\Entity\Personne;
use PDO;
use Exception;

class PersonneManager{
    public static function createFake($number){
        $tab_people = [];

        for ($i=0; $i<$number; $i++){
            $faker = Factory::create();
            $fake_person = new Personne($faker->lastName, $faker->firstName, $faker->address, $faker->postcode, $faker->country, $faker->company);
            array_push($tab_people, $fake_person);
        }

        return $tab_people;
    }

    public static function readDataFromDB(){
        try {
            // Ouverture de la connection avec PDO
            $USER = 'root';
            $PASSWORD = '';
            $connexion = new PDO('mysql:host=localhost;dbname=poo_ex2', $USER, $PASSWORD);
            $personnes = [];

            // Requête SQL
             $resultat = $connexion->prepare("SELECT * FROM address");
             $resultat->execute();
             
             // ---------------------------------------------------------------------------
             // fonction: fetchAll : pour récupérer tout le résultat de la requete SQL
             // Paramètres::
             // 1. type de récupération : FETCH_CLASS et FETCH_PROPS_LATE
             // 2. le nom de la classe
             // 3. le/les paramètres attendus par le constructeur : arguments dans un tableau
             // DOC : FETCH_PROPS_LATE (assigns properties after the constructor execution)
             // ----------------------------------------------------------------------------
             
            $personnes = $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'ISL\Entity\Personne',['first_name','last_name', 'address','zip_code', 'country', 'company']);
            var_dump($personnes[0]);
            return $personnes;
        } catch (Exception $exc) {
            die('Erreur : ' . $exc->getMessage());
        }
    }
}


