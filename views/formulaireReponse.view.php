<?php $title="reponse du formulaire de livraison";
require_once(__DIR__ . "/partials/head.php") ?>

<h1>Page de Validation de Recherche </h1>
<?php if (!isset($_POST['nom'])  || empty($_POST['nom']) || !isset($_POST['prenom'])  || empty($_POST['prenom']) || !isset($_POST['adresse'])  || empty($_POST['adresse']) || !isset($_POST['postal'])  || empty($_POST['postal']) || !isset($_POST['ville'])  || empty($_POST['ville']) || !isset($_POST['telephone'])  || empty($_POST['telephone'])) {
    echo " <h2>merci de remplir le formulaire </h2>";
} else {
?>
    <div>
        <h2>Votre Nom:</h2>
        <p><?php echo $_POST['nom'] ?></p>
    </div>
    <div>
        <h2>Votre Prenom:</h2>
        <p><?php echo $_POST['prenom'] ?></p>
    </div>
    <h2>Votre Adresse:</h2>
    <p><?php echo $_POST['adresse'] ?></p>
    </div>
    </div>
    <h2>Votre Code Postale:</h2>
    <p><?php echo $_POST["postal"] ?></p>
    </div>
    </div>
    <h2>Votre Ville:</h2>
    <p><?php echo $_POST['ville'] ?></p>
    </div>
    </div>
    <h2>Votre Telephonne:</h2>
    <p><?php echo $_POST['telephone'] ?></p>
    </div>
<?php } ?>


<?php require_once(__DIR__ . "/partials/footer.php") ?> 