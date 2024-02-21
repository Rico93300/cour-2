<?php 
$title = "contact";
require_once(__DIR__ . "/partials/head.php") ?>
<form action="contactValid" method="POST">
   <!-- dans action on indique le nom du fichier vers lequel le formulaire va etre envoyer. -->
   <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
   </div>
   <div class="mb-3">
      <label for="nom">votre nom</label>
      <input type="text" name="nom" id="nom">
   </div>
   <div class="mb-3">
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
   </div>

   <button type="submit" class='btn btn-primary'>Envoyer</button>



</form>
<?php require_once(__DIR__ . "/partials/footer.php") ?>