<?php

use App\Controllers\MainController;
use App\Controllers\CatalogController;



// Fichier de Composer qui va charger les packages automatiquement
require '../vendor/autoload.php';
$altoRouter  = new AltoRouter();


if (isset($_GET['page'])) {
    // on récupère la page demandé par l'utilisateur
    $currentPage = $_GET['page'];
} else {
    // notre page par défaut
    $currentPage = "/";
}


$altoRouter = new AltoRouter();

$altoRouter->setBasePath($_SERVER['BASE_URI']);

dump($_SERVER['BASE_URI']);
// http://altorouter.com/usage/mapping-routes.html


$altoRouter->map(
    'GET',
    '/',
    [
        "method" => "displayHome",
        "controller" => "MainController"
    ],
    'home'
);

$altoRouter->map(
    'GET',
    '/createurs',
    [
        "method" => "displayCreator",
        "controller" => "MainController"
    ],
    'creator'
);



$matchingRoute = $altoRouter->match();

if ($matchingRoute) {
    
    $tableauInfo = $matchingRoute['target'];
    $nomMethode = $tableauInfo['method'];
    

    $pathController = 'App\\Controllers\\';
    $nomController = $matchingRoute['target']['controller'];
    $nomController = $pathController . $nomController;

    
    $params = $matchingRoute['params'];

    $controller = new $nomController();

    $controller->$nomMethode($params);
} else {
    // Je n'ai pas trouvé de route qui correspond
    exit('404 not found');
}
