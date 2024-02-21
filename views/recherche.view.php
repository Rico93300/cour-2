<?php 
$title="recherche";
require_once(__DIR__ . "/partials/head.php") ?>


<h1>Page de Recherche</h1>
<form action="rechercheResultat" method="POST">


 <div class="mb-3">
    <label for="search">search</label>
    <input type="search" name="search" id="search">
 </div>
 <legend>Choose if you want global search</legend>

<div class="mb-3">
  <input type="checkbox" id="global" name="global" value="yes" checked />

  <label for="global">global search</label>
</div>

<div class="mb-3">
<label for="select">tri:</label>

<select name="select" id="select">
  <option value="category"> by category</option>
  <option value="name">by name</option>
  <option value="date">by date</option>

</select>

 </div>

 
 <button type="submit" class= 'btn btn-primary '>Envoyer</button>
 
 
 
</form>
<?php  require_once(__DIR__ . "/partials/footer.php") ?> ?>