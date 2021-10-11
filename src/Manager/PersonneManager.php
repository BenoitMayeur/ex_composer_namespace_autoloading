<?php

namespace ISL\Manager;

use Faker\Factory;
use ISL\Entity\Personne;

class PersonneManager{
    public static function create($number){
        $tab_people = [];

        for ($i=0; $i<$number; $i++){
            $faker = Factory::create();
            $fake_person = new Personne($faker->lastName, $faker->firstName, $faker->address, $faker->postcode, $faker->country, $faker->company);
            array_push($tab_people, $fake_person);
        }

        return $tab_people;
    }
}