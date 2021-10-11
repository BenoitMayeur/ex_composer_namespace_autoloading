<style>
<?php include 'src/css/normalize.css'; ?>
<?php include 'src/css/main.css'; ?>
</style>

<?php

    require_once 'vendor/autoload.php';
    
    use ISL\Manager\PersonneManager;

    $faker = Faker\Factory::create();

    $number_fake_people = 5;

    $people = PersonneManager::createFake($number_fake_people);

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

    $people = PersonneManager::readDataFromDB();
    print_r($people);
    echo "<br>";
    print_r(count($people));

    echo "<table>";
    echo "<tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Pays</th>
            <th>Société</th>
        </tr>";
    for ($i=0; $i<count($people); $i++){
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

<!-- Array ( [0] => ISL\Entity\Personne 
Object ( 
    [nom:ISL\Entity\Personne:private] => nom 
    [prenom:ISL\Entity\Personne:private] => prenom 
    [adresse:ISL\Entity\Personne:private] => addresse 
    [code_postal:ISL\Entity\Personne:private] => code postal 
    [pays:ISL\Entity\Personne:private] => pays 
    [societe:ISL\Entity\Personne:private] => societe 
    [id] => 1 
    [number] => 25 
    [city] => Liège 
    [zip_code] => 4000 
    [country] => Belgique 
    [street] => rue de la Gare 
    [last_name] => Jones 
    [first_name] => Jimbo 
    [company] => Jimbo Ltd ) 

    [1] => ISL\Entity\Personne Object ( 
        [nom:ISL\Entity\Personne:private] => nom 
        [prenom:ISL\Entity\Personne:private] => prenom 
        [adresse:ISL\Entity\Personne:private] => addresse 
        [code_postal:ISL\Entity\Personne:private] => code postal 
        [pays:ISL\Entity\Personne:private] => pays 
        [societe:ISL\Entity\Personne:private] => societe 
        [id] => 2 
        [number] => 26 
        [city] => Liège 
        [zip_code] => 4000 
        [country] => Belgique 
        [street] => rue de la Gare 
        [last_name] => Linguene 
        [first_name] => Albert 
        [company] => Pasta Ltd ) )  -->