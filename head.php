<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    
        <?php 
        // si la variable tittlt existe olors on affiche le contenue
        if (isset($title)) {
                echo $title;
            }  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <ul class="nav justify-content-center  ">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="recherche.php">recherche</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="formulaireLivraison.php">formulaire Livraison</a>
        </li>
        <?php
    //si  la cle "user"  existe en session alors on affiche le vouton de deconnection
     if(isset($_SESSION['user'])){ ?>
    <li class="nav-item">
    <a class="nav-link" href=" logout.php"> deconnexion</a>
    </li>
    <?php
    //sinon on affiche  le bouton de connection
}else{ ?>
<li class="nav-item">
        <a class="nav-link" href="login.php"> connexion</a>
    </li>
    <?php } ?>
    </ul>