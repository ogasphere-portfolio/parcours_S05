<?php

namespace App\Controllers;


class CoreController {

    protected function show($viewName, $viewData = [])
    {
        // Pour utiliser $altoRouter partout
        // on utilise une astuce que c'est pas bien de l'utiliser
        // le mot clé global CASSE la portée d'une variable
        global $altoRouter;

       
        // On récupère l'URL absolue pour les URLs dans les views (css, images, etc.)
        $absoluteURL = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
        
        require_once __DIR__.'/../Views/header.tpl.php';

        extract($viewData);  
       
        require_once __DIR__."/../Views/{$viewName}.tpl.php";

        
        require_once __DIR__.'/../Views/footer.tpl.php';

        
    }
}