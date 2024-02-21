
<?php 
$title="login";
require_once(__DIR__ . "/partials/head.php") ?>

<form action="" method="POST">

    <label for="email">email :</label>
    <input type="email" name="email" />


    <label for="password">Mot de Passe :</label>
    <input type="password" name="password" />



    <button type="submit" class='btn btn-primary '>Envoyer</button>
</form>



<?php if (isset($errorMessage)) {
    echo "<p class='text-danger'>" . $errorMessage . "</p>";
}


require_once(__DIR__ . "/partials/footer.php") ?>