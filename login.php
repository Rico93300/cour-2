<?php
session_start();
require_once(__DIR__ . "/variable.php");
// on commence à vérifier si email et password exiztent dans la superglobale
if (isset($_POST["email"]) && isset($_POST["password"])) {
    // ensuite on vérifie si l'information dans email est bien sous la forme email
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        // si ce n'est pas le cas on affiche un message d'erreur
        // je cree la variable 'error message'et je lui attribut un message si l'email es dans un mauvais format
        $errorMessage = "erreur dans le formulaire";
    } else {
        // si c'est le cas on parcourt le tableau des utilsiateurs qui provient des variables
        foreach ($users as $user) {
            // Pour chaque utilsiateur on verifie si l'email est le même que celui envoyé dans le formulaire
            // Puis si l'email existe dans le tableau on vérifie que le mot de passe correspond
            if ($user["email"] === $_POST["email"] && $user["password"] === $_POST["password"]) {
                // Si c'est le cas on affiche à l'utilisateur un message de validation
                // echo "<h2>Vous êtes connecté<h2>";
                // j'arrete le code si on a trouver l'utilisateur car ca sert a rien de continuer la boucle
                // return;
                $_SESSION['user']= $user['email'];
                header('location: /');
            }
        }
        // si aucun utilisateur n'est trouver alors on met un utre message dans l'erreur
        $errorMessage = "email ou mot de passe incorrect";
    }
}
require_once(__DIR__ . "/views/login.view.php") ?>






