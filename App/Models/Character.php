<?php

namespace App\Models;

use PDO;
use App\Utils\Database;

Class Character{


    private $id;
    private $name;
    private $description;
    private $picture;
    private $created_at;	
    private $updated_at;
    private $type;
    

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
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

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
}