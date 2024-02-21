<?php  
$title="formulaire livraison";
   require_once(__DIR__ . "/partials/head.php") ?>



   <h1>FORMULAIRE</h1>

   <div>
      <form action="formulaireReponse" method="post">
         <p><label for="firstname">Nom :</label>
            <input type="text" name="nom" />
         </p>

         <p><label for="familyname">Prénom :</label>
            <input type="text" name="prenom" />
         </p>

         <p><label for="contact_street">Adresse :</label>
            <input type="text" name="adresse" />
         </p>

         <p><label for="contact_postalcode">Code postal :</label>
            <input type="text" name="postal" />
         </p>

         <p><label for="contact_city">Ville :</label>
            <input type="text" name="ville" />
         </p>


         <p><label for="contact_phone">Téléphone :</label>
            <input type="number" name="telephone" />
         </p>

   </div>
   <button type="submit" class='btn btn-primary '>Envoyer</button>


   </form>
   <?php require_once(__DIR__ . "/partials/footer.php") ?>