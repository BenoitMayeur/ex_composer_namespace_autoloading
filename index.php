<style>
<?php include 'src/css/normalize.css'; ?>
<?php include 'src/css/main.css'; ?>
</style>

<?php

    require_once 'vendor/autoload.php';
    
    use ISL\Manager\PersonneManager;

    $faker = Faker\Factory::create();

    $number_fake_people = 5;

    $people = PersonneManager::create($number_fake_people);

    echo "<table>";
    echo "<tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Pays</th>
            <th>Société</th>
        </tr>";
    for ($i=0; $i<$number_fake_people; $i++){
        echo "<tr>
                <td>".$people[$i]->getNom()."</td>
                <td>".$people[$i]->getPrenom()."</td>
                <td>".$people[$i]->getAdresse()."</td>
                <td>".$people[$i]->getCodePostal()."</td>
                <td>".$people[$i]->getPays()."</td>
                <td>".$people[$i]->getSociete()."</td>
            </tr>";
    }

    echo"</table>";

?>