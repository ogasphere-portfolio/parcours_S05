<?php

namespace App\Controllers;



use App\Models\Character;
use App\Controllers\CoreController;



class MainController extends CoreController{

    
    public function displayHome(){
        // j'utilise la méthode show avec les bons paramètres
        // je sais que cette méthode doit affiche la page home, obvious, le nom de la méthode
        
        $CharacterModel = new Character();
        $allCharacterQueJeCherche = $CharacterModel->findAllForHome();

        
        $parametresPourLaVue = [
            "Characters" => $allCharacterQueJeCherche,
            
        ];
        
        // TODO à modifier car il manque les infos à afficher, en plus de l'idCategory
        $this->show('home', $parametresPourLaVue);

        
    }
    

}