<?php

namespace App\Models;

use PDO;
use App\Utils\Database;

Class Character{
    public function findAllForHome(){

        $pdo = Database::getPDO();
    
        // je créer ma requete SQL
       $sql = "SELECT * FROM `character` ORDER BY `name` ASC";
    
       // je demande à PDO de faire la requete
       $pdoStatement = $pdo->query($sql);
    
       // je demande à récupérer les données au format objet de type Category
       $allCharacters = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Character::class);
    
       // le but est de renvoyer l'objet 
       return $allCharacters;
       }

}