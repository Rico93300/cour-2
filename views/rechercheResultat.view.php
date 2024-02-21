<?php 
  $title="rersultats de recherche";
  require_once(__DIR__ . "/partials/head.php") ?>
  <h1>Page de Validation de Recherche </h1>
  <?php if (!isset($_POST['search'])  || empty($_POST['search'])) {
      echo " <h2>merci de remplir le formulaire </h2>";
  } else {
  ?>
      <div>
          <h2>your search :</h2>
          <p><?php echo $_POST['search'] ?></p>
      </div>
      <div>
          <h2>global search :</h2>
          <p><?php if (isset($_POST['global'])) {
                  echo 'yes';
              } else { echo'no';
              }  ?></p>
      </div>
      <h2>your tri :</h2>
      <p><?php echo $_POST['select'] ?></p>
      </div>
  <?php } ?>
  <?php require_once(__DIR__ . "/partials/footer.php") ?> 