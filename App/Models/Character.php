<?php

namespace App\Models;

use PDO;
use App\Utils\Database;
use App\Models\CoreModels;

Class Character extends CoreModels{

    
        
    /**
     * description
     *
     * @var string
     */
    private $description;    
    /**
     * nom de l'image
     *
     * @var string
     */
    private $picture;    
    /**
     * clé de liaison avec la table type
     *
     * @var int
     */
    private $type;
    
    /**
     * Le nom du type de personnage
     *
     * @var string
     */
    private $typeName;
    
    
    /**
     * findAllForHome requete pour l'affichage des personnages
     *
     * @return array
     */
    public function findAllForHome(){

        $pdo = Database::getPDO();
    
        // je créer ma requete SQL
       $sql = "SELECT `character`.*, `type`.`name` AS typeName FROM `character` 
                INNER JOIN `type` ON `character`.`type_id` = `type`.`id`
                ORDER BY `name` ASC";
    

      // je demande à PDO de faire la requete
       $pdoStatement = $pdo->query($sql);
    
       // je demande à récupérer les données au format objet de type Category
       $allCharacters = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Character::class);
       
       // le but est de renvoyer l'objet 
       return $allCharacters;
       }


    

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    
    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of typeName
     */ 
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set the value of typeName
     *
     * @return  self
     */ 
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }
}