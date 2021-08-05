<?php

namespace App\Controllers;

use App\Models\Character;
use App\Controllers\CoreController;

class MainController extends CoreController
{
    // Affichage de la page d'acceuil
    public function displayHome()
    {
        $CharacterModel = new Character();
        $allCharacterSearch = $CharacterModel->findAllForHome();

        $paramsForView = [
            "Characters" => $allCharacterSearch,
        ];
        $this->show('home', $paramsForView);
    }

    // Affichage de la page des ccréateurs
    public function displayCreator()
    {

        $this->show('creator');
    }
}
