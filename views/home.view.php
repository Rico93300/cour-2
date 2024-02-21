<?php
$title= "acceuil";
require_once(__DIR__ . "/partials/head.php") ?>
<h1 class="text-center">Ma premiere Page php</h1>
<div class="container d-flex">
   
    <div class="row justify-content-center">
        <h2 class="text-center">Utilisateurs</h2>
        <?php getUsers($users); ?>
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center">Produits</h2>
        <?php getProducts($products); ?>
    </div>
</div>
<?php require_once(__DIR__ . "/partials/footer.php") ?>