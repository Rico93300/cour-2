<?php
session_start();
require_once(__DIR__ . "/variable.php");
require_once(__DIR__ . "/function.php");
//  getUsers($users);

?>


<?php
$title= "acceuil";
require_once(__DIR__ . "/head.php") ?>
<h1>Ma premiere Page php</h1>
<div class="container">
    <div class="row">
        <h2>Produits</h2>
        <?php getProducts($products); ?>
    </div>
    <div class="row">
        <h2>Utilisateurs</h2>
        <?php getUsers($users); ?>
    </div>
</div>
<?php require_once(__DIR__ . "/footer.php") ?>