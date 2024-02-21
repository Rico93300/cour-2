<?php
// echo '<pre>';
// var_dump($_SERVER['REQUEST_URI']);
// echo '<pre>';


// $uri=parse_url($_SERVER['REQUEST_URI'])['path'];

// if($uri == '/home'){
//     require_once(__DIR__ . "/home.php");
// }elseif($uri == '/login'){
//     require_once(__DIR__ . "/login.php");
// }elseif($uri == '/contact'){
//     require_once(__DIR__ . "/contact.php");
// }elseif($uri == '/contactValid'){
//     require_once(__DIR__ . "/contactValid.php");
// }elseif($uri == '/formulaireLivraison'){
//     require_once(__DIR__ . "/formulaireLivraison.php");
// }elseif($uri == '/formulaireReponse'){
//     require_once(__DIR__ . "/formulaireReponse.php");
// }elseif($uri == '/recherche'){
//     require_once(__DIR__ . "/recherche.php");
// }elseif($uri == '/rechercheResultat'){
//     require_once(__DIR__ . "/rechercheResultat.php");
// }elseif($uri == '/logout'){
//     require_once(__DIR__ . "/logout.php");
// }else{
//     require_once(__DIR__ . "/404.php");
// }
// 

// fonctin qui permet de recuperer juste l'uri
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



// le tableau de routage
$routes = [

    '/' => '/home.php',
    '/login' => '/login.php',
    '/contact' => '/contact.php',
    '/contacyValid' => '/contactValid.php',
    '/formulaireLivraison' => '/formulaireLivraison.php',
    '/formulaireReponse' => '/formulaireReponse.php',
    '/recherche' => '/recherche.php',
    '/rechercheResultat' => '/rechercheResultat.php',
    '/logout' => '/logout.php'
];

// $uri = '/home';
// array_key_exists('home', $routes), si il le reouve il me donne comme reponse
//true sinon  il me reponds false
//if (true { require_once( __DIR__.'/home.php)}


// la condition  qui retourne un fichier si la  route existe
if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . $routes[$uri]);
} else {
    require_once(__DIR__ . "/404.php");
};
?>