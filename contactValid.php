<?php 

// var_dump($_POST)?>




    <?php
    session_start();
    $title="contact validation";
    require_once(__DIR__."/head.php") ?>
    <h1>Page de Validation formulaire </h1>
    <?php if (!isset($_POST['email']) || !isset($_POST['message']) || !isset($_POST['nom']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['message'])) {
        echo " <h2>merci de remplir le formulaire </h2>";
    } else {
        ?>
    <div>
        <h2>Votre email:</h2>
        <p><?php echo $_POST['email'] ?></p>
    </div>
    <div>
        <h2>Votre message:</h2>
        <p><?php echo $_POST['message'] ?></p>
    </div>
    <h2>Votre nom:</h2>
        <p><?php echo $_POST['nom'] ?></p>
    </div>
<?php } ?>
    <?php require_once(__DIR__."/footer.php") ?>
