
    <?php 
    session_start();
    $title="rersultats de recherche";
    require_once(__DIR__ . "/head.php") ?>
    <h1>Page de Validation de Recherche </h1>
    <?php if (!isset($_GET['search'])  || empty($_GET['search'])) {
        echo " <h2>merci de remplir le formulaire </h2>";
    } else {
    ?>
        <div>
            <h2>your search :</h2>
            <p><?php echo $_GET['search'] ?></p>
        </div>
        <div>
            <h2>global search :</h2>
            <p><?php if (isset($_GET['global'])) {
                    echo 'yes';
                } else { echo'no';
                }  ?></p>
        </div>
        <h2>your tri :</h2>
        <p><?php echo $_GET['select'] ?></p>
        </div>
    <?php } ?>
    <?php require_once(__DIR__ . "/footer.php") ?>
