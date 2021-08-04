<?php

namespace App\Models;

use App\Utils\Database;

Class Character{
    public function findAllForHome(){

        $pdo = Database::getPDO();
    
        // je créer ma requete SQL
       $sql = "SELECT * FROM `character`
       WHERE `home_order` > 0
       ORDER BY `home_order` ASC";
    
       // je demande à PDO de faire la requete
       $pdoStatement = $pdo->query($sql);
    
       // je demande à récupérer les données au format objet de type Category
       $allCategory = $pdoStatement->fetchAll(PDO::FETCH_CLASS,category::class);
    
       // le but est de renvoyer l'objet 
       return $allCategory;
       }

}